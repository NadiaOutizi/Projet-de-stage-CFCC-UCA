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
 
      <a  class="btn btn-primary"  href="{{ route('evenements.create') }}" title="Créer un groupe" >Add</a>
  </p>
    <table class="table text-center text-light" >
        <thead>
          <tr>
        
            <th scope="col">nom</th>
            <th scope="col">date</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
            <th scope="col">Actions</th>
          
          </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
              <tr>
         
            <td>{{$event->nom}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->description}}</td>
         
            <td>
                <img src="{{ asset('images/'.$event->image) }}" width='100px' height='100px' alt="{{ $event->nom }}">
          
            </td>    
        

            <td>
              <form method="POST" action="{{route("evenements.destroy", $event->id)}}">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">delete</button>
              </form>
          </td>
          <td>
          
          
                  <button type="submit">
                      <a href={{route("evenements.edit",$event->id)}}>update</a>
                  </button>
               
               
          </td>
             </tr>  
            @endforeach
          
       
        </tbody>
      </table>
    <br>
      <p>{{$events->links()}}</p>
      
    @endsection
</body>
</html>