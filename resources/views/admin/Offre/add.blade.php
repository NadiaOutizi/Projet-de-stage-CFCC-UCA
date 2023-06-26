<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/js/app.js'])
</head>
<body>
    @extends('layouts.sidebar')
    @section('content')

    <h3 class="text-center ">Ajouter Offre</h3>
    <form action="{{ route('offre.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom" class="text-light">Nom</label>
            <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type') }}" required>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
          
        <div class="form-group">
            <label for="type" class="text-light">Compétences_visées</label>
            <input type="text" class="form-control @error('Compétences_visées') is-invalid @enderror" id="Compétences_visées" name="Compétences_visées" value="{{ old('Compétences_visées') }}" required>
            @error('Compétences_visées')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">Objectifs_formation</label>
            <input type="text" class="form-control @error('Objectifs_formation') is-invalid @enderror" id="Objectifs_formation" name="Objectifs_formation" value="{{ old('Objectifs_formation') }}" required>
            @error('Objectifs_formation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">Public_cible</label>
            <input type="text" class="form-control @error('Public_cible') is-invalid @enderror" id="Public_cible" name="Public_cible" value="{{ old('Public_cible') }}" required>
            @error('Public_cible')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
          
        <div class="form-group">
            <label for="type" class="text-light">frais_dossier</label>
            <input type="text" class="form-control @error('frais_dossier') is-invalid @enderror" id="frais_dossier" name="frais_dossier" value="{{ old('frais_dossier') }}" required>
            @error('frais_dossier')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">cout_formation</label>
            <input type="text" class="form-control @error('cout_formation') is-invalid @enderror" id="cout_formation" name="cout_formation" value="{{ old('cout_formation') }}" required>
            @error('cout_formation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
          
        <div class="form-group">
            <label for="type" class="text-light">lieu_formation</label>
            <input type="text" class="form-control @error('lieu_formation') is-invalid @enderror" id="lieu_formation" name="lieu_formation" value="{{ old('lieu_formation') }}" required>
            @error('lieu_formation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">duree_formation</label>
            <input type="text" class="form-control @error('duree_formation') is-invalid @enderror" id="duree_formation" name="duree_formation" value="{{ old('duree_formation') }}" required>
            @error('duree_formation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">deroulement_formation</label>
            <input type="text" class="form-control @error('deroulement_formation') is-invalid @enderror" id="deroulement_formation" name="deroulement_formation" value="{{ old('deroulement_formation') }}" required>
            @error('deroulement_formation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">selection_candidats</label>
            <input type="text" class="form-control @error('selection_candidats') is-invalid @enderror" id="selection_candidats" name="selection_candidats" value="{{ old('selection_candidats') }}" required>
            @error('selection_candidats')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type"class="text-light">evaluation</label>
            <input type="text" class="form-control @error('evaluation') is-invalid @enderror" id="evaluation" name="evaluation" value="{{ old('evaluation') }}" required>
            @error('evaluation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type" class="text-light">diplome_delivre</label>
            <input type="text" class="form-control @error('diplome_delivre') is-invalid @enderror" id="diplome_delivre" name="diplome_delivre" value="{{ old('diplome_delivre') }}" required>
            @error('diplome_delivre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
          
        <div class="form-group col-md-6">
            <label class="text-light">Encadrant</label> 
            <select name="encadrant_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose an Encadrant</option>
               @foreach ($encadrant as $encadrant)
                   <option value="{{ $encadrant->id }}">{{ $encadrant->nom }}</option>
               @endforeach
           </select>
       
           </div>
             
           <div class="form-group col-md-6">
            <label class="text-light"> Centre</label> 
            <select name="centre_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose a Centre</option>
               @foreach ($centre as $centre)
                   <option value="{{ $centre->id }}">{{ $centre->nom }}</option>
               @endforeach
           </select>
       
           </div> <br>
       
        <input type="submit" value="add Events"class="btn btn-primary"/>
    </form>
    
      
     

    

 
    @endsection
</body>
