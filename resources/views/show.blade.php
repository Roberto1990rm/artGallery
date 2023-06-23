@extends('template')

@section('title', 'Welcome')

@section('content')
<div class="card-container2">
    
  
    <div class="card">
      
      <img src="{{ $pintura['imagen'] }}" alt="Imagen" style="width: 100%; height: 250px;">
      <p class="card-subtitle mb-2 text-muted" style="text-align: center; padding-top: 5px;">Año: {{ $pintura['año'] }}</p>
      <h5 class="card-title" style="margin-bottom: -20px;">{{ $pintura['nombre'] }}</h5>
      <div class="card-body" style="overflow-y: scroll; height: 200px; margin-bottom:10px;">
          <p class="description-scroll">{{ $pintura['descripcion'] }}</p>
          
      </div>
          <p class="card-text" style="text-align: center;" >{{ $pintura['precio'] }}</p>
          <p class="card-text" style="text-align: center;" >{{ $pintura['estado'] }}</p>
          <a href="{{ route('pinturas') }}" class="btn btn-primary btn-profesional">
            <i class="fas fa-arrow-left"></i> Volver a Pinturas
          </a>
  </div>

    </div>
  </div>

@endsection