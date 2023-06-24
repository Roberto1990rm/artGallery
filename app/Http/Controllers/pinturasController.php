<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Models\Pintura;
use App\Http\Requests\PinturaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Database\Eloquent\Collection;


class PinturasController extends Controller
{
    public function list()
    {
        $pinturas = Pintura::all();
        return view('pinturas', ['pinturas' => $pinturas]);
    }

    public function edit($id)
    {
        $pintura = Pintura::findOrFail($id);
        return view('edit', compact('pintura'));
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|max:30',
        'año' => 'required|max:5',
        'precio' => 'required|max:6',
        'estado' => 'required|max:10',
        'nueva_imagen' => 'image|max:2048', // Validar que el campo "nueva_imagen" sea una imagen válida (max: 2048 KB)
        'descripcion' => 'required',
    ]);

    $pintura = Pintura::findOrFail($id);
    $pintura->name = $validatedData['name'];
    $pintura->año = $validatedData['año'];
    $pintura->precio = $validatedData['precio'];
    $pintura->estado = $validatedData['estado'];

    if ($request->hasFile('nueva_imagen')) {
        $imagen = $request->file('nueva_imagen');
        $path = $imagen->store('public/images'); // Almacenar en la carpeta "public/images"
        $pintura->imagen = 'storage/images/' . basename($path); // Ruta con el prefijo "storage/images/"
    }

    $pintura->descripcion = $validatedData['descripcion'];
    $pintura->save();

    return redirect()->route('pinturas.show', $pintura->id)->with('success', 'La pintura se ha actualizado correctamente');
}


    public function pinturas()
    {
        $pinturas = Pintura::all();
        return view('pinturas', ['pinturas' => $pinturas]);
    }

    public function destroy($id)
    {
        $pintura = Pintura::findOrFail($id);
        $pintura->delete();

        return redirect()->route('pinturas')->with('success', 'La pintura se ha eliminado correctamente');
    }

    public function show($id)
    {
        $pintura = Pintura::find($id);
        $imagenUrl = Storage::url($pintura->imagen);
        return view('show', compact('pintura', 'imagenUrl'));
    }

    public function store(Request $request)
    {
        $pintura = new Pintura();
        $pintura->name = $request->input('name');

        $pintura->año = $request->input('año');
        $pintura->precio = $request->input('precio');
        $pintura->descripcion = $request->input('descripcion');
        $pintura->estado = $request->input('estado');
    
        
        

        if ($request->hasFile('imagen')) {
            $image = $request->file('imagen');
            $path = $image->store('public/images'); // Almacenar en la carpeta "public/images"
            $pintura->imagen = '/storage/images/' . basename($path); // Ruta con el prefijo "/storage/images/"
        } else {
            $pintura->imagen = '/images/pintura1.jpg'; // Ruta completa de la imagen por defecto
        }
        $pintura->save();
    
        return redirect()->route('pinturas')->with('success', 'Pintura creada correctamente.');
    }
    
    
    public function storeContact(Request $request)
{
    $name = $request->name;
    $message1 = $request->email;
    $email = $request->message;

    Mail::to('hello@example.com')->send(new ContactNotification($name, $message1, $email));

    return redirect()->route('contact_success');
}

public function contactSuccess()
{
    return view('contact_success');
}


   public function contact()
{
    $name = 'John Doe';
    $message1 = 'Hello, how can I help you?';
    $email = 'john@example.com';

    return view('contact', compact('name', 'message1', 'email'));
}

}
