@extends('layouts.app')

@section('title', 'Formulario enviado con éxito')

@section('content')

<div style="display: block;">

<p>"Mensaje enviado"</p>


<a href="{{ route('Home') }}">Home</a>

</div>

@endsection