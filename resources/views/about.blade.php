@extends('template')

@section('title', 'AboutUs')

@section('content')
   


    <div class="container mt-4" style="padding-top: 180px;">
        <div class="row">
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color1.png')}}" width="100%" alt="card1 1">
                    <i class="fas fa-arrow-down arrow-icon" style="background-color: rgb(17, 255, 0); margin-top: -320px;padding: 5%;opacity: 0.8;"></i>
                    <div class="card1-img-overlay">
                        <h5 class="card1-title" style="text-align: center; padding-top:20px;">Diferente</h5>
                        <p class="card1-text" style="text-align: justify; padding: 5%">En nuestro negocio de arte, nos enorgullece presentar obras y esculturas únicas y distintivas. Cada pieza que creamos representa nuestra pasión por la creatividad y el deseo de transmitir emociones a través del arte.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color2.png')}}" width="100%" alt="card1 2">
                    <i class="fas fa-arrow-down arrow-icon" style="background-color: rgb(0, 4, 128); margin-top: -320px;padding: 5%;opacity: 0.8;"></i>
                    <div class="card1-img-overlay">
                        <h5 class="card1-title" style="text-align: center;padding-top:20px;">Fresco</h5>
                        <p class="card1-text" style="text-align: justify; padding: 5%;">Nos inspiramos en el mundo que nos rodea, en las últimas tendencias y en el dinamismo de la sociedad actual. Buscamos romper con los esquemas tradicionales y ofrecer una perspectiva fresca y moderna a través de nuestras creaciones.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color3.png')}}" width="100%" alt="card1 3">
                    <i class="fas fa-arrow-down arrow-icon" style="background-color: red; margin-top: -305px;padding: 5%; opacity: 0.8;"></i>
                    <div class="card1-img-overlay">
                        <h5 class="card1-title" style="text-align: center;padding-top:20px;">Exclusivo</h5>
                        <p class="card1-text" style="text-align: justify; padding: 5%;">Ofrecemos a los amantes del arte la oportunidad de poseer algo único y especial. Cada pieza representa una inversión en arte exclusivo, una obra que no se puede replicar ni encontrar en ningún otro lugar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card1">
                    <img class="card1-img-top" src="{{ asset('images/color4.png')}}" width="100%" alt="card1 4">
                    <i class="fas fa-arrow-down arrow-icon" style="background-color: orange; margin-top: -317px; padding: 5%; opacity: 0.8; "></i>
                    <div class="card1-img-overlay">
                        <h5 class="card1-title" style="text-align: center;padding-top:20px; ">Original</h5>
                        <p class="card1-text" style="text-align: justify;padding: 5%;">Cada una de nuestras obras es concebida con un propósito y una visión irreproducibles. Cada una cuenta con su propia historia, evocando emociones y estimulando la imaginación. Ofrecemos una experiencia única con nuestros trabajos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
