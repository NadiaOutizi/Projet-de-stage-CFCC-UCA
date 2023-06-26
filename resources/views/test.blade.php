<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    @viteReactRefresh
  
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js']);
    <style>
       .desktop-closed-message-avatar {
        background-color: rgba(165, 42, 42, 0.633) !important;
    }
    

  </style>
</head>
<body style="overflow-x: hidden">

    @extends('layouts.app')
    
    @section('content')
     

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        {{-- <img src="img/carousel1-1-1.jpg" alt="Los Angeles"> --}}
        <img src="img/carousel-1-1-1.jpg" alt="Los Angeles" style="width:100%">
     
      </div>
  
      <div class="item">
        {{-- <img src="img/carousel-1.jpg" alt="Chicago"> --}}
        <img src="img/2-2.jpeg" alt="Los Angeles" style="width:100%">
      </div>
  
      <div class="item">
        {{-- <img src="img/carousel-3.jpg" alt="New York"> --}}
        <img src="img/carousel-2.jpg" alt="New York" style="width:100%">
     
      </div>
  
  </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <main id="main">

 <!-- About Start -->
 <div class="container-fluid py-5">
  <div class="container py-5">
      <div class="row align-items-center">
          <div class="col-lg-5">
              <img class="img-fluid rounded mb-4 mb-lg-0" src="img/about.jpg" alt="">
          </div>
          <div class="col-lg-7" >
              <div class="text-left mb-4">
                <div class="section-title" data-aos="fade-up">
                  <h2>About Us</h2>
                </div>
                
                  {{-- 
                  <p>Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet, sea est sea vero sed et. Sadipscing labore tempor at sit dolor clita consetetur diam. Diam ut diam tempor no et, lorem dolore invidunt no nonumy stet ea labore, dolor justo et sit gubergren diam sed sed no ipsum. Sit tempor ut nonumy elitr dolores justo aliquyam ipsum stet</p> --}}
                  <div class="col-lg-10 " >
                    <p  style="color: aliceblue;margin-left:100px;font-size:17px;font-family:Raleway">
                      La creation d'un Centre de Formation Continue et de certification 
                      au sein de l'Universite a qui incombe le role de pilotage et de developpement
                      de la formation continue,s'inscrit parfaitement dans le cadre de la strategie 
                      globale de l'UCA visant a accompagner l'evolution de lenvironnement technologique et 
                      economique regionale et national. 
                    </p>
                    <p style="color: aliceblue;margin-left:100px;font-size:17px;font-family:Raleway">
                      Le Centre de Formation Continue et  de Certification est une structure 
                      rattachee a la presidence de l'Universite et joue le role d'une Interface Institutionnelle
                      interne et externe, d'un incubateur de competences, en proposant des cercles de formaion 
                      et en animant un lieu d'expertise.
                    </p>
                  </div>
                </div>
             
              {{-- <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a> --}}
          </div>
      </div>
  </div>
</div>
<!-- About End -->
<div class="section-title" data-aos="fade-up" id='sectionID'>

    <h2 >Actualité</h2>
    {{-- testo --}}
<br><br><br>
    
  {{-- testo --}}
  <div class="container">
    <div class="row">
      @foreach ($events as $event)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <div class="card-img-top-container">
              <img class="card-img-top" src="{{ asset('images/' . $event->image) }}" alt="Image description"> 
              <div class="card-img-top-overlay">
                <p class="card-text">{{ $event->description }}</p>
              </div>
            </div>
            <div class="card-body">
              <h3 class="card-title">{{ $event->nom }}</h3>
              <h4 class="card-text" style="color:blue">{{ $event->date }}</h4>
              {{-- <a href="{{ route('evenements.show', $event->id) }}" class="btn btn-primary">{{ __('Learn more') }}</a> --}}
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
  
  <div class="section-title" data-aos="fade-up">

    <h2>Nos Partenaire</h2>
<img src="img/ensasafi.png" alt="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/cadii.png" alt=""  width="100px" height="100px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src="img/fst-marrakech-logo.jpg" width="100px" height="100px"alt="" srcset="">
  </div>
<div class="scrollToTop-btn active">
      <i class="fas fa-angle-up"></i>
    </div>
  {{-- testoooo --}}

  {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}

  <script>

    var botmanWidget = {

        aboutText: 'ssdsd',

        introMessage: " Hi!"

    };

  </script>



  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
  <footer class="footer">

    <p>Copyright@2023 <a href="#">CFCC</a>. All Rights Reserved.</p>
  </footer>
  {{-- testoooo --}}
{{-- footer start --}}

{{-- <script>
  const footer = document.querySelector('.footer');
let prevScrollPos = window.pageYOffset;

window.addEventListener('scroll', function() {
  let currentScrollPos = window.pageYOffset;
  if (prevScrollPos > currentScrollPos) {
    footer.classList.add('hide');
    
  } else {
    footer.classList.remove('hide');
  }
  prevScrollPos = currentScrollPos;
});  </script> --}}


{{-- footer end --}}
    @endsection
     
</body>
</html>