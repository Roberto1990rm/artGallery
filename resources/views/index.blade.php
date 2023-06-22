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
    <link rel="stylesheet" href="{{ asset('css/cards.css')}}">
    <title>JoséRomán</title>
    
</head>
<body>
    <div class="navConteinerMov">
        <nav class="navbar navbar-expand">
            <div class="navConteiner container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="{{ route('Home') }}"><img src="{{ asset('img/Roman1.png')}}" style="opacity: 0.85;" alt="IconRoman" width="175px"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                <a class="nav-link" href="#">About Román</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;">
                  Roman´s Art
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Sculpture</a></li>
                  <li><a class="dropdown-item" href="{{ route ('index')}}">Paintings</a></li>

                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex searchtoolbar" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btnNav" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
  </div>

  <div class="bg-white" style="color: white;">
  <div class="card-container1">
    <div class="card full-width-card card-outside-loop">
        <img src="{{ asset('/img/pintura1.png') }}" alt="Imagen" style="width: 100%; height: 500px;">
        <div class="card-body1 card-content">
            <h5 class="card-title">Título de la obra de arte</h5>
            <p class="card-subtitle mb-2 text-muted">Año: 2023 </p>
            <p class="description-scroll">primera
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. At delectus modi iste ducimus nesciunt animi veritatis omnis quaerat reiciendis necessitatibus? Nihil sint voluptates incidunt consequuntur est, quis aut natus. Enim. Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis eligendi nulla aliquid amet laboriosam, est tempora repellendus enim at ea. Harum hic placeat assumenda fugiat eveniet ab aut. Exercitationem, incidunt.</p>
        </div>
    </div>
  </div>

  <div class="card-container">
  @foreach ($pinturas as $pintura)

  <div class="card">
    
    <img src="{{ $pintura['imagen'] }}" alt="Imagen" style="width: 100%; height: 250px;">
    <p class="card-subtitle mb-2 text-muted" style="text-align: center; padding-top: 5px;">Año: {{ $pintura['año'] }}</p>
    <h5 class="card-title" style="margin-bottom: -30px;">{{ $pintura['nombre'] }}</h5>
    <div class="card-body" style="overflow-y: scroll; height: 200px; margin-bottom:10px;">
        <p class="description-scroll">{{ $pintura['descripcion'] }}</p>
        
    </div>
        <p class="card-text" style="text-align: center;" >{{ $pintura['precio'] }}</p>
        <p class="card-text" style="text-align: center;" >{{ $pintura['estado'] }}</p>
</div>
@endforeach
  </div>
</div>

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
              <li><a href="#">Home</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>