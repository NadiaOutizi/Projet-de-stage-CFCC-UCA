<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layouts.sidebar')
    @section('content')
 <p class="text-center">
 
      <a  class="btn btn-primary"  href="{{ route('centre.create') }}" title="Créer un groupe" >Add</a>
  </p>
    <table class="table text-center text-light" >
        <thead>
          <tr>
        
            <th scope="col">nom</th>
            <th scope="col">adress</th>
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($centres as $c)
              <tr>
         
            <td>{{$c->nom}}</td>
            <td>{{$c->adress}}</td>

            <td>
              <form method="POST" action="{{route("centre.destroy", $c->id)}}">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">delete</button>
              </form>
          </td>
          <td>
          
          
                  <button type="submit">
                      <a href={{route("centre.edit",$c->id)}}>update</a>
                  </button>
               
               
          </td>
             </tr>  
            @endforeach
          
       
        </tbody>
      </table>
    <br>
      <p>{{$centres->links()}}</p>
  
       
    @endsection
</body>
</html>