@extends('template')

@section('title', 'Create')

@section('content')


 <form action="{{ route('pinturas.store') }}" method="POST" class="form">
    @csrf

    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" maxlength="30" required>
    </div>

    <div>
        <label for="año">Año:</label>
        <input type="text" name="año" id="año" maxlength="5" required>
    </div>

    <div>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" maxlength="6" required>
    </div>

    <div>
        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" maxlength="10" required>
    </div>

    <div>
        <label for="imagen">URL de la imagen:</label>
        <input type="text" name="imagen" id="imagen" maxlength="200" required>
    </div>

    <div>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required></textarea>
    </div>

    <button type="submit">Guardar</button>
</form>



@endsection
  