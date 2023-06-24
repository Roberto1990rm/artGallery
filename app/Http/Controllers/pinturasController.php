<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Models\Pintura;

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
            'imagen' => 'required|max:200',
            'descripcion' => 'required',
        ]);

        $pintura = Pintura::findOrFail($id);
        $pintura->name = $validatedData['name'];
        $pintura->año = $validatedData['año'];
        $pintura->precio = $validatedData['precio'];
        $pintura->estado = $validatedData['estado'];
        $pintura->imagen = $validatedData['imagen'];
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
        $pintura = Pintura::findOrFail($id);
        return view('show', compact('pintura'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'año' => 'required|max:5',
            'precio' => 'required|max:6',
            'estado' => 'required|max:10',
            'imagen' => 'required|max:200',
            'descripcion' => 'required',
        ]);

        $pintura = new Pintura();
        $pintura->name = $validatedData['name'];
        $pintura->año = $validatedData['año'];
        $pintura->precio = $validatedData['precio'];
        $pintura->estado = $validatedData['estado'];
        $pintura->imagen = $validatedData['imagen'];
        $pintura->descripcion = $validatedData['descripcion'];
        $pintura->save();

        return redirect()->route('pinturas.show', $pintura->id)->with('success', 'La pintura se ha creado correctamente');
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
