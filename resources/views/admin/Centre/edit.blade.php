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
   <form action="{{route('centre.update', $centre->id)}}" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6"> 
    @csrf
        </div>
    @method('PUT')

        <div class="form-group col-md-6"> 
 <label class="text-light">nom :</label>   <input type="text" name="nom" value="{{$centre->nom}}" >
        </div>
      
        <div class="form-group col-md-6"> 
  <label class="text-light"> adress : </label><input type="text" name="adress" value="{{$centre->adress}}" >
        </div> <br><br>
    <button type="submit" class="btn btn-primary">Update</button>
</form> 
@endsection
</body>
</html>
