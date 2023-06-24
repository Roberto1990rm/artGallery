@extends('template')

@section('title', 'Welcome')

@section('content')




    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color1.png')}}" width="100% alt="card1 1" ">
                    <div class="card1-img-overlay">
                        <h5 class="card1-title">Texto de ejemplo 1</h5>
                        <p class="card1-text">Contenido adicional 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color2.png')}}" width="100% alt="card1 2">
                    <div class="card1-img-overlay">
                        <h5 class="card1-title">Texto de ejemplo 2</h5>
                        <p class="card1-text">Contenido adicional 2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color3.png')}}" width="100% alt="card1 3">
                    <div class="card1-img-overlay">
                        <h5 class="card1-title">Texto de ejemplo 3</h5>
                        <p class="card1-text">Contenido adicional 3</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color4.png')}}" width="100% alt="card1 4">
                    <div class="card1-img-overlay">
                        <h5 class="card1-title">Texto de ejemplo 4</h5>
                        <p class="card1-text">Contenido adicional 4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-12" style="text-align: center; margin-top: 15px; display:flex; justify-content: center;">

    <h1>hola</h1>



   </div>


@endsection