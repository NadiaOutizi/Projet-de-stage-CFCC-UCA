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
    <h3 class="text-center">Ajouter Centre</h3>
    <form method="POST" action={{route('centre.store')}} >
        <div class="form-row">
            <div class="form-group col-md-6">   
            @csrf
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">   
                 <label class="text-light">nom:</label><input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group col-md-6">   
                 <label class="text-light">adresse:</label><input type="text" name="adress" class="form-control">
                </div>
                
                <br>
   
                <input type="submit" value="add center" class="btn btn-primary"/>
        
    </form>
    @endsection
</body>
</html>