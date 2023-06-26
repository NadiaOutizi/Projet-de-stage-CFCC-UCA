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
 
      <a  class="btn btn-primary"  href="{{ route('encadrant.create') }}" title="Créer un groupe" >Add</a>
  </p>
    <table class="table text-center text-light" >
        <thead>
          <tr>
        
            <th scope="col">nom</th>
            <th scope="col">email</th>
            <th scope="col">Fax</th>
            <th scope="col">Telephone</th>
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($encadrants as $encadrant)
              <tr>
         
            <td>{{$encadrant->nom}}</td>
            <td>{{$encadrant->email}}</td>
            <td>{{$encadrant->Fax}}</td>
            <td>{{$encadrant->telephone}}</td>
          

            <td>
              <form method="POST" action="{{route("encadrant.destroy", $encadrant->id)}}">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">delete</button>
              </form>
          </td>
          <td>
          
          
                  <button type="submit">
                      <a href={{route("encadrant.edit",$encadrant->id)}}>update</a>
                  </button>
               
               
          </td>
             </tr>  
            @endforeach
          
       
        </tbody>
      </table>
    <br>
      <p>{{$encadrants->links()}}</p>
  
       
    @endsection
</body>
</html>