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
   <form action="{{route('encadrant.update', $encadrant->id)}}" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6"> 
    @csrf
        </div>
    @method('PUT')

        <div class="form-group col-md-6"> 
 <label class="text-light">nom :</label>   <input type="text" name="nom" value="{{$encadrant->nom}}" >
        </div>
      
        <div class="form-group col-md-6"> 
       <label class="text-light"> email : </label><input type="text" name="email" value="{{$encadrant->email}}" >
        </div> 
        <div class="form-group col-md-6"> 
       <label class="text-light"> Fax : </label><input type="text" name="Fax" value="{{$encadrant->Fax}}" >
        </div> 
        <div class="form-group col-md-6"> 
       <label class="text-light"> Telephone : </label><input type="text" name="telephone" value="{{$encadrant->telephone}}" >
        </div> 
        <br><br>
    <button type="submit" class="btn btn-primary">Update</button>
</form> 
@endsection
</body>
</html>
