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
