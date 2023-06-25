@extends('template')

@section('title', 'welcome')

@section('content')

<div class="centerSection">
    <div>
      <a href="ruta-de-la-imagen-escultura">
        <img src="{{ asset('images/esculturaCenter.png')}}" class="imgCenter" alt="">
      </a>
      <h2 style="text-align: center;">Sculptures</h2>
    </div>
    

  


    <div>
      <a href="{{ route('pinturas') }}">
        <img src="{{ asset('images/pintura.png')}}" class="imgCenter1" alt="">
      </a>
      <h2 style="text-align:center; padding-top: 26px">Paintings</h2>
    </div>
    <script src="{{ asset('js/home.js') }}"></script>
  </div>
  
  <script src="{{ asset('js/home.js') }}"></script>
  </div>





@endsection
