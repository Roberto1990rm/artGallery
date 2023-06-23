<?php


namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;
use App\Models\Pintura;



class PinturasController extends HomeController
{
    public function list()
    {
        $pinturas = Pintura::all();

        return view('pinturas', ['pinturas' => $pinturas]);
    }

    public function edit($id)
{
    // Obtener los datos de la pintura por su ID
    $pintura = Pintura::findOrFail($id);

    // Mostrar la vista de edición con los datos de la pintura
    return view('edit', compact('pintura'));
}

public function update(Request $request, $id)
{
    // Validar los datos del formulario de edición
    $validatedData = $request->validate([
        'name' => 'required|max:30',
        'año' => 'required|max:5',
        'precio' => 'required|max:6',
        'estado' => 'required|max:10',
        'imagen' => 'required|max:200',
        'descripcion' => 'required',
    ]);

    // Obtener la pintura a actualizar
    $pintura = Pintura::findOrFail($id);

    // Actualizar los datos de la pintura con los valores del formulario
    $pintura->name = $validatedData['name'];
    $pintura->año = $validatedData['año'];
    $pintura->precio = $validatedData['precio'];
    $pintura->estado = $validatedData['estado'];
    $pintura->imagen = $validatedData['imagen'];
    $pintura->descripcion = $validatedData['descripcion'];

    // Guardar los cambios en la base de datos
    $pintura->save();

    // Redireccionar a la vista de detalle de la pintura actualizada
    return redirect()->route('pinturas.show', $pintura->id)->with('success', 'La pintura se ha actualizado correctamente');
}

public function pinturas()
{
    $pinturas = Pintura::all();

    return view('pinturas', ['pinturas' => $pinturas]);
}


public function destroy($id)
{
    // Buscar la pintura por ID
    $pintura = Pintura::findOrFail($id);

    // Eliminar la pintura
    $pintura->delete();

    // Redireccionar a la lista de pinturas con un mensaje de éxito
    return redirect()->route('pinturas')->with('success', 'La pintura se ha eliminado correctamente');
    
}

public function show($id)
{
    // Obtener los datos de la pintura por su ID
    $pintura = Pintura::findOrFail($id);

    // Mostrar la vista de detalle con los datos de la pintura
    return view('show', compact('pintura'));
}

public function store(Request $request)
{
    // Validar los datos del formulario de creación
    $validatedData = $request->validate([
        'name' => 'required|max:30',
        'año' => 'required|max:5',
        'precio' => 'required|max:6',
        'estado' => 'required|max:10',
        'imagen' => 'required|max:200',
        'descripcion' => 'required',
    ]);

    // Crear una nueva instancia de Pintura con los datos validados
    $pintura = new Pintura();
    $pintura->name = $validatedData['name'];
    $pintura->año = $validatedData['año'];
    $pintura->precio = $validatedData['precio'];
    $pintura->estado = $validatedData['estado'];
    $pintura->imagen = $validatedData['imagen'];
    $pintura->descripcion = $validatedData['descripcion'];

    // Guardar la nueva pintura en la base de datos
    $pintura->save();

    // Redireccionar a la vista de detalle de la nueva pintura
    return redirect()->route('pinturas.show', $pintura->id)->with('success', 'La pintura se ha creado correctamente');
}







}