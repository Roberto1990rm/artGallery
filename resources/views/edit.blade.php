@extends('layouts.app')

@section('title', 'Editar Pintura')

@section('content')

<form action="{{ route('pinturas.update', $pintura->id) }}" method="POST" class="form" enctype="multipart/form-data">

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
        <label for="imagen_actual">Imagen actual:</label>
        <img src="{{ asset($pintura->imagen) }}" alt="Imagen actual" width="120px;" style="margin: 20px;">
    </div>

    <div>
        <label for="nueva_imagen">Nueva imagen:</label>
        <input type="file" name="nueva_imagen" id="nueva_imagen">
    </div>

    <div>
        <label for="descripcion" style="margin-top: 20px;">Descripción:</label>
        <textarea name="descripcion" id="descripcion" required>{{ $pintura->descripcion }}</textarea>
    </div>

    <button type="submit">Guardar</button>
</form>

@endsection
