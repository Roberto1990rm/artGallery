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
        $pinturas = Pintura::all();
        return view('pinturas', ['pinturas' => $pinturas]);
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
