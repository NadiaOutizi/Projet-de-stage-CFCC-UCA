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
    <h3 class="text-center ">Ajouter Evenement</h3>
    <form method="POST" action={{route('evenements.store')}} enctype="multipart/form-data" >
        @csrf
<div class="form-row">
        <div class="form-group col-md-6"> 
  <label class="text-light">nom :</label>  <input type="text" name="nom" class="form-control">
            </div>
        <div class="form-group col-md-6"> 
           <label class="text-light"> date:</label> <input type="date" name="date" class="form-control">
        </div>
        <div class="form-group col-md-6"> 
            <label class="text-light">description :</label><input type="text" name="description" class="form-control">
        </div>
    
        <div class="form-group col-md-6"> 
            <label class="text-light">Image:</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group col-md-6">
            <label class="text-light">user</label> 
            <select name="user_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose a user</option>
               @foreach ($users as $user)
                   <option value="{{ $user->id }}">{{ $user->name }}</option>
               @endforeach
           </select>
       
           </div>
           <div class="form-group col-md-6">
            <label class="text-light">Centre</label> 
            <select name="centre_id"  class="form-control" >
               <option value="choose an id" aria-readonly="false">choose a Centre</option>
               @foreach ($centres as $centre)
                   <option value="{{ $centre->id }}">{{ $centre->nom }}</option>
               @endforeach
           </select>
       
           </div>
           <br/>

    <input type="submit" value="add Events"class="btn btn-primary"/>
</div>
    </form>
    @endsection
</body>
