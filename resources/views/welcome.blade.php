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
   #p{
    object-fit:contain;
    mix-blend-mode:color-burn;
   } 


</style>

</head>
<body style="overflow-x: hidden">
    @extends('layouts.app')
    
    @section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" >
        <div class="item active">
         
          <img src="{{asset('img/carousel-3.jpg')}}"  width='100%' alt="Los Angeles" >
       
        </div>
    
        <div class="item">
         
          <img src="{{asset('img/carousel-2.jpg')}}" width='100%' alt="Los Angeles" >
        </div>
    
        <div class="item">
         
          <img src="{{asset('img/carousel-1.jpg')}}" width='100%' alt="New York" >
       
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
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('img/about.jpg')}}" alt="">
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
    
        <h2 >Organized Events</h2>
        {{-- testo --}}
    <br><br><br>
        
      {{-- testo --}}
      <div class="container">
        <div class="row">
          @foreach ($events as $event)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-img-top-container">
                  <img class="card-img-top" height='300px' src="{{ asset('images/' . $event->image) }}" alt="Image description"> 
                  <div class="card-img-top-overlay">
                    <p class="card-text">{{ $event->description }}</p>
                  </div>
                </div>
                <div class="card-body" style="height:100px">
                  <h3 class="card-title" >{{ $event->nom }}</h3>
                  <h4 class="card-text" style="color:blue">{{ $event->date }}</h4>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <br><br>
    <!-- Divider: Clients -->
    <div class="container">
      <h2>Nos Partenaires</h2>
      <br><br>
      <div id="partnerCarousel" style="height:150px"
       class="carousel slide" data-ride="carousel" data-interval="1000">
        <!-- Indicators -->
      
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height:150px;" id="p">
          <div class="item active" style="display:flex;height:100px;">
            <img width="300px" height="300px" src="http://bouchralebzar.com/wp-content/uploads/2022/04/Capture-décran-2021-11-02-à-13.57.42.png" alt="Partner 1">
          {{-- </div> --}}
    
          {{-- <div class="item"> --}}
            <img width="300px" height="300px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkX2-Tezl-chujo-Q9Etfw8Q1DfYeIMskHJaDrK4WSesOEHGYKQTaTYGghcbMcJebU7g&usqp=CAU" alt="Partner 2">
          {{-- </div> --}}
          {{-- <div class="item"> --}}
            <img width="300px" height="300px" src="https://www.dreamjob.ma/wp-content/uploads/2021/03/FST-Settat.png" alt="Partner 4">
          {{-- </div> --}}
    
          {{-- <div class="item"> --}}
            <img width="300px" height="300px" src="https://cdn-03.9rayti.com/rsrc/cache/widen_292/uploads/2012/07/logo-ensa-safi.png" alt="Partner 3">
          {{-- </div> --}}
    
          {{-- <div class="item"> --}}
            {{-- <img width="300px" height="300px" src="data:image/png;base64,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" alt="Partner 3"> --}}
          {{-- </div> --}}
          {{-- <div class="item"> --}}
            {{-- <img width="300px" height="300px" src="https://4.bp.blogspot.com/-jFyz4M0TwnA/W2l6t2Otr5I/AAAAAAAA2uk/CRLtIvt0ixwtbKMOzvrnzxbIgmBwZCBzACLcBGAs/w1200-h630-p-k-no-nu/fsjes.PNG" alt="Partner 3"> --}}
          </div>
    
          
        
        </div>
    
       
    </div>
    
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

@endsection

</body>
</html>