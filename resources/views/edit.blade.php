@extends('template')

@section('title', 'Editar Pintura')

@section('content')

<form action="{{ route('pinturas.update', $pintura->id) }}" method="POST" class="form">

    @csrf
    @method('PUT')

    <div>
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" maxlength="30" required value="{{ $pintura->name }}">
    </div>

    <div>
        <label for="año">Año:</label>
        <input type="text" name="año" id="año" maxlength="5" required value="{{ $pintura->año }}">
    </div>

    <div>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" maxlength="6" required value="{{ $pintura->precio }}">
    </div>

    <div>
        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" maxlength="10" required value="{{ $pintura->estado }}">
    </div>

    <div>
        <label for="imagen">URL de la imagen:</label>
        <input type="text" name="imagen" id="imagen" maxlength="200" required value="{{ $pintura->imagen }}">
    </div>

    <div>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required>{{ $pintura->descripcion }}</textarea>
    </div>

    <button type="submit">Guardar</button>
</form>

@endsection
