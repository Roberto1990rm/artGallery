@extends('template')

@section('title', 'Formulario enviado con éxito')

@section('content')
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    <!-- Resto del contenido de la página -->
@endsection