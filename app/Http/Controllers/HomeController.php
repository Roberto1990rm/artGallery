<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Models\Pintura;

class HomeController extends Controller
{
    public function pinturas()
{
    $pinturas = Pintura::all(); // Obtén los datos de las pinturas desde tu modelo

    return view('pinturas', compact('pinturas'));
}


    public function show($id)
{
    // Obtener los datos de la pintura con el ID proporcionado
    $pintura = Pintura::find($id);

    // Verificar si la pintura existe
    if (!$pintura) {
        abort(404); // Puedes personalizar la respuesta de error como desees
    }

    // Pasar los datos de la pintura a la vista
    return view('show', ['pintura' => $pintura]);
}

public function create()
    {
        return view('create');
    }

    public function store(Request $request)
{
    // Validar los datos enviados desde el formulario
    $validatedData = $request->validate([
        'name' => 'required|max:30',
        'año' => 'required|max:5',
        'precio' => 'required|max:6',
        'estado' => 'required|max:10',
        'imagen' => 'required|max:200',
        'descripcion' => 'required',
    ]);

    // Crear una nueva instancia del modelo Pintura y asignar los valores
    $pintura = new Pintura();
    $pintura->name = $validatedData['name'];
    $pintura->año = $validatedData['año'];
    $pintura->precio = $validatedData['precio'];
    $pintura->estado = $validatedData['estado'];
    $pintura->imagen = $validatedData['imagen'];
    $pintura->descripcion = $validatedData['descripcion'];

    // Guardar la pintura en la base de datos
    $pintura->save();

    // Redireccionar a una página de éxito o a la lista de pinturas
    return redirect()->route('pinturas')->with('success', 'La pintura se ha creado correctamente');
}


    public function storeContact(Request $request)
    {
        // Validar los datos del formulario de contacto
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'privacy' => 'required',
        ]);

        $name = $request->input('name'); // Obtener el valor del campo 'name' del formulario

        Mail::to("hello@example.com")->send(new ContactNotification($name, $request->email, $request->message));

        // Redirigir al usuario a una página de éxito o mostrar un mensaje de confirmación
        return redirect()->route('contact.success')->with('success', '¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.');
    }
}
