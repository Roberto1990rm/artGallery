<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d0a3551360.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sectionCenter.css')}}">
    <link rel="stylesheet" href="{{ asset('css/pinturas.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cards.css')}}">
    <title>JoséRomán</title>
    
</head>
<body>
  <div class="navConteinerMov">
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('Home') }}"><img src="{{ asset('images/Roman1.png')}}" style="opacity: 0.85;" alt="IconRoman" width="175px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">Roman´s Art</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Sculpture</a></li>
              <li><a class="dropdown-item" href="{{ route('pinturas') }}">Paintings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else</a></li>
            </ul>
          </li>
            
            <li class="nav-item" style="margin-top: 8px; padding-right:5px;">
              <a href="{{ route('about') }}" class="link-no-decoration">About Román</a>
            </li>
              <li class="nav-item" style="margin-top: 8px;">
                <a href="{{ route('contact') }}" style="color: black; padding-right: 8px; text-decoration: none;">Contact</a>
              </li>
          </ul>
          <a class="nav-link active" style="color:rgb(50, 49, 49); padding-right: 5px;" aria-current="page" href="{{ route('Home') }}">Home</a>
          
          
          <form class="d-flex searchtoolbar" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btnNav" type="submit">Search</button>
          </form>
          <ul class="navbar-nav ml-auto">
            @guest
            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Private</a>
            </li>
            @endauth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Area Privada</a>
            </li>
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
  </div>
    
  </div>
  <h1 class="h1Pinturas" style="text-align: center;">Last Paintings</h1>
  <div class="bg-white" style="color: white;">
  <div class="card-container1">
    <div class="card full-width-card card-outside-loop">
        <img src="{{ asset('/images/pintura1.png') }}" alt="Imagen" style="width: 100%; height: 500px;">
        <div class="card-body1 card-content">
            
            <p class="card-subtitle mb-2 text-muted" style="text-align: center;">Año: 2023 </p>
            <h5 class="card-title">Título de la obra de arte</h5>
            <p class="description-scroll">primera
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At delectus modi iste ducimus nesciunt animi veritatis omnis quaerat reiciendis necessitatibus? Nihil sint voluptates incidunt consequuntur est, quis aut natus. Enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi nulla aliquid amet laboriosam, est tempora repellendus enim at ea. Harum hic placeat assumenda fugiat eveniet ab aut. Exercitationem, incidunt.</p>
        </div>
        <p class="card-text2" style="text-align: center; margin-bottom: -5px;" >$100</p>
        <p class="card-text" style="text-align: center;">En venta</p>
    </div>
  </div>

  

  <div class="card-container">
  @foreach ($pinturas as $pintura)

  <div class="card">
    
   

    <img src="{{ asset($pintura->imagen) }}" alt="Pintura">






    <p class="card-subtitle mb-2 text-muted" style="text-align: center; padding-top: 5px;">Año: {{ $pintura['año'] }}</p>
    <h5 class="card-subtitle">{{ $pintura['name'] }}</h5>
    <div class="card-body" style="overflow-y: scroll; height: 200px; margin-bottom:10px;">
        <p class="description-scroll">{{ $pintura['descripcion'] }}</p>
        
    </div>
        <p class="card-text" style="text-align: center;" >{{ $pintura['precio'] }}</p>
        <p class="card-text" style="text-align: center;" >{{ $pintura['estado'] }}</p>
        <a href="{{ route('pinturas.show', ['id' => $pintura->id]) }}" class="btn btn-primary btn-profesional">
          <i class="bi bi-arrow-right"></i> Ver más
      </a>
</div>

@endforeach

@auth
  
  </div>
</div>
<a href="{{ route('pinturas.create') }}" style="display: flex; justify-content: center;">Crear Pintura</a>
@endauth
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Social Media</h3>
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/tu_perfil_de_facebook" class="fab fa-facebook" target="_blank"></a></li>
              <li><a href="https://www.instagram.com/regulero13/" class="fab fa-instagram" target="_blank"></a></li>
              <li><a href="https://www.linkedin.com/in/tu_perfil_de_linkedin" class="fab fa-linkedin" target="_blank"></a></li>
            </ul> 
          </div>
          <div class="col-md-4">
            <h3>Contact</h3>
            <ul class="contact-info">
              <li>
                <a href="https://api.whatsapp.com/send?phone=34666777777&text=Hola%20me%20gustaría%20contactar%20contigo" target="_blank" style="text-decoration: none;" rel="nofollow">
                  <i class="fab fa-whatsapp"></i> Contact via WhatsApp
                </a>
              </li>
              <li><i class="fa fa-phone"></i> <span class="info-label">Contact Phone:</span> <a href="tel:+34666777777">+34 666-777-777</a></li>
              <li><i class="fa fa-envelope"></i> <span class="info-label">Email:</span> <a href="mailto:roman@roman.com">roman@roman.com</a></li>
              <li><i class="fa fa-map-marker"></i> <span class="info-label">Contact Address:</span> <a href="https://maps.google.com?q=Melilla+12,+Melilla+(Spain),+Z.C.+52005">Melilla 12, Melilla (Spain), 52005</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3>Links</h3>
            <ul class="footer-links">
              <li><a href="{{ route('Home') }}">Home</a></li>
              <li><a href={{ route ('pinturas')}}>Pinturas</a></li>
              <li><a href="#">Esculturas</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>