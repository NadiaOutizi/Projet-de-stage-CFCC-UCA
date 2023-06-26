<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
     
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center justify-content-between">
        
              <div class="logo">
                <h1>
                  <a href="/"><img src="{{url('img/CFCC.jpg')}}" alt="" srcset=""></a>
                
                </h1>
               
              </div>
        
              <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="nav-link scrollto active" href="/">Home</a></li>
                  <li class="dropdown"><a href="#"><span>Offre</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li class="dropdown"><a href="certificat"><span>Formation Continue Qualifiante</span> <i class="bi bi-chevron-right"></i></a>
                       
                      </li>
                      <li class="dropdown"><a href="#"><span>Séminaires de Perfectionnement</span> <i class="bi bi-chevron-right"></i></a>
                      
                      </li>
                      <li class="dropdown"><a href="#"><span>Formation spécifique</span> <i class="bi bi-chevron-right"></i></a>
                       
                      </li>
                      <li class="dropdown"><a href="#"><span>Stages de Formation</span> <i class="bi bi-chevron-right"></i></a>
                       
                      </li>
                      <li class="dropdown"><a href="#"><span>Formation Continue Diplômante</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li><a href="/master">Master </a></li>
                          <li><a href="/licence">Licence</a></li>
                        
                        </ul>
                      </li>
                      <li><a href="/formationComplementaire">Formation Complémentaire</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="/actualite"><span>Actualité</span> <i class="bi bi-chevron-down"></i></a>
                   
                  </li>
                  <li><a class="#" href="#sectionID">Events organisés</a></li>
                  </li>
                  <li><a class="nav-link scrollto" href="/contact">Contact</a>
                  </li>
           
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="getstarted scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

      
            @else
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" style="background-color: #222222"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </div>
          </li>

             
              
        
          
      @endguest
           

          </nav>
            </div>
          </header>
        <main class="">
            @yield('content')
        </main>
 
    </div>
  
</body>
</html>
  