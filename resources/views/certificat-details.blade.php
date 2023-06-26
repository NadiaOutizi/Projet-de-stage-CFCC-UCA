<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js']);
    <style>
          .card {
    background-color: #f4f4f4;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,.1);
    margin-top: 100px;
    padding: 30px;
  }

  .card-title {
    color: #7B3F00;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
  }

  .card-subtitle {
    color: #7B3F00;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
  }

  .card-text {
    color: #333;
    font-size: 16px;
    margin-bottom: 20px;
  }

  hr {
    border-color: #7B3F00;
    margin: 20px 0;
  }
    </style>
</head>
<body>
    @extends('layouts.app')
    <br><br>
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card mb-4">
          <div class="card-body">
            {{-- {{var_dump($offre)}} --}}
            <h3 class="card-title">{{ $offre->nom }}</h3>
            <hr>
            <h5 class="card-subtitle mb-2">Compétences visées:</h5>
            <p class="card-text">{{  $offre->Compétences_visées }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Objectifs de la formation:</h5>
            <p class="card-text">{{  $offre->Objectifs_formation }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Public cible:</h5>
            <p class="card-text">{{  $offre->Public_cible }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Frais de dossier:</h5>
            <p class="card-text">{{ $offre->frais_dossier }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Coût de la formation:</h5>
            <p class="card-text">{{  $offre->cout_formation }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Lieu de la formation:</h5>
            <p class="card-text">{{  $offre->lieu_formation }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Durée de la formation:</h5>
            <p class="card-text">{{  $offre->duree_formation }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Déroulement de la formation:</h5>
            <p class="card-text">{{  $offre->deroulement_formation }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Sélection des candidats:</h5>
            <p class="card-text">{{  $offre->selection_candidats }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Evaluation:</h5>
            <p class="card-text">{{  $offre->evaluation }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Diplôme délivré:</h5>
            <p class="card-text">{{  $offre->diplome_delivre }}</p>
            <hr>
            <h5 class="card-subtitle mb-2">Programme:</h5>
            <p class="card-text">{{  $offre->programme }}</p>
            <hr>
            {{-- <button style="color:#f4f4f4;background-color:#7B3F00;padding:10px;position:relative;left:500px;border:none">Apply</button> --}}
            <form action="{{ route('offre.participate', ['offre' => $offre->id]) }}" method="POST">
              @csrf
              <button type="submit" style="color:#f4f4f4;background-color:#7B3F00;padding:10px;position:relative;left:500px;border:none">Apply</button>
            </form>
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
    </div>
  </div>
  
@endsection
</body>
</html>
