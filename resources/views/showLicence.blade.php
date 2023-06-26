<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js']);   
     <style>
         #cc{
      margin-top: 200px;
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

<div class="container" id="cc">
  <div class="row justify-content-center">
    @foreach($offres as $offre)
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title">{{ $offre->nom }}</h5>
            <p class="card-text">{{ $offre->lieu_formation }}</p>
            <a href="{{ route('Licenceoffre', $offre) }}" class="button">Show More</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


    @endsection
      
</body>
</html>