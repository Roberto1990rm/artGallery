@extends('template')

@section('title', 'Welcome')

@section('content')
<div class="card-container2 col-12" style="background-color: white; height: 1700px; margin-bottom: 100px;">
  
    <div class="card col-11 col-md-8 mx-auto" style="height: 100%;">
      <img src="{{ asset($pintura->imagen) }}" alt="Imagen" height="100%;">
      <p class="card-subtitle mb-2 text-muted" style="text-align: center; padding-top: 5px;">Año: {{ $pintura['año'] }}</p>
      <h5 class="card-subtitle" style="display: flex; justify-content: center;">{{ $pintura['name'] }}</h5>
      <div class="card-body" style="overflow-y: scroll; height: 200px; margin-bottom:10px;">
          <p class="description-scroll">{{ $pintura['descripcion'] }}</p>
      </div>
      <p class="card-text" style="text-align: center;" >{{ $pintura['precio'] }}</p>
      <p class="card-text" style="text-align: center; margin-bottom: 20px;" >{{ $pintura['estado'] }}</p>
      @auth
  
<div style="display: flex; justify-content: space-around; margin-bottom: 30px;">
  <a href="{{ route('pinturas.edit', $pintura['id']) }}" class="btn  btn-primary">Editar</a>
  <form action="{{ route('pinturas.destroy', $pintura->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Eliminar</button>
  </form>
</div>
@endauth
      
    </div>
</div>
</div>



<div style="display: flex; justify-content: center; margin-top: -100px;">
<a href="{{ route('pinturas') }}" class="btn btn-primary btn-profesional" style="background-color: #bcd8f1;">
  <i class="fas fa-arrow-left"></i> Volver a Pinturas
</a>
</div>
@endsection
