<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js']);
<style>
    .container-fluid {
  margin-top: 100px;
}
a.button {
  display: inline-block;
  padding: 7px 15px;
  border: 2px solid #1A120B;
  background-color: #fff;
  color: #1A120B;
  text-decoration: none;
  border-radius: 10px;
}

a.button:hover {
  background-color: #1A120B;
  color: #fff;
}
 
</style>
</head>
<body>
    @extends('layouts.app')
  <br><br>
    @section('content')
    <div class="container-fluid ">
        <div class="row filters mb-4" style="text-align:center;">
          <form method="get" action="{{ url('/licence') }}" >
            <div class="form-group">
              <select name="lieu" id="lieu" class="form-select text-center" style="width: 200px;" onchange="this.form.submit()">
                <option value="">Tous</option>
                @foreach($lieuFormation as $lieu)
                  <option value="{{ $lieu->lieu_formation }}" {{ $lieu->lieu_formation == request()->input('lieu') ? 'selected' : '' }}>
                    {{ $lieu->lieu_formation }}
                  </option>
                @endforeach
              </select>

            </div>

          </form>
        </div>
      
        <div class="row offers">
          @foreach($offres as $offre)
            <div class="col-md-4">
              <div class="card mb-4">
                <div class="card-body" style="height:200px">
                  @if (Auth::user() && Auth::user()->is_admin)
                  <form method="POST" action="{{ route('offre.destroy', ['offre' => $offre->id]) }}">
          
                    @csrf
                       @method('DELETE')
                         <button type="submit" class="btn btn-dark btn-sm float-end">
                           <span>X</span>
                         </button>
                    </form>
                    @endif
                  <h3 class="card-title">{{ $offre->lieu_formation }}</h3>
      
                  <a href="{{ route('showLicence', ['lieu' => $offre->lieu_formation]) }}" class="button"style="" >Show more</a>
                  @auth
                  @if (auth()->user()->is_admin)
                      <button>
                          <a href="{{ route('offre.participants', $offre->id) }}">View Participants</a>
                      </button>
                  @endif
              @endauth
                </div>
              </div>
            </div>

          @endforeach
        </div>
      
        {{ $offres->links() }}
      
 
      

 @endsection   

</body>
</html>