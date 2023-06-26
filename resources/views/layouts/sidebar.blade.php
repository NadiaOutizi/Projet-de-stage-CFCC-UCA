<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    @vite(['resources/sass/app.scss', 'resources/css/sidebar.css', 'resources/js/app.js'])
  

</head>
<body>
    <section class="showcase">
        <header>
          <h2 class="logo">CFCC</h2>
          <div class="toggle"></div>
        </header>
        <div class="overlay"></div>
        <div class="text">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        </div>
  
      </section>
      <div class="menu">
        <ul>
          <li><a href="{{url('/admin/dashboard')}}">Home</a></li>
          <li><a href="{{url('users')}}">Users</a></li>
          <li><a href="{{url('centre')}}">Centres</a></li>
          <li><a href="{{url('evenements')}}">Evenements</a></li>
          <li><a href="{{url('encadrant')}}">Encadrants</a></li>
          <li><a href="{{url('offre')}}">Offre</a></li>
          <br>
          <br>
          <div class="admin">
            <a href="{{url('/')}}">User section</a>
          </div>
       <br>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" 
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        </ul>
      </div>
      <script>
         const menuToggle = document.querySelector('.toggle');
          const showcase = document.querySelector('.showcase');
    
          menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            showcase.classList.toggle('active');
          })
      </script>
</body>
</html> 
