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
<h3 class="text-center">Alter User</h3>
  <table class="table text-center text-light" >
    <thead>
      <tr>
    
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">is_admin</th>
        <th scope="col">Actions</th>
      
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
          <tr>
     
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->is_admin}}</td>
        <td>
            <button type="submit">
                <a href={{route("users.edit",$user->id)}}>edit</a>
            </button>
         
        </td>
         </tr>  
        @endforeach
      
   
    </tbody>
  </table>
<br>
  <p>{{$users->links()}}</p>
  
 
@endsection
</body>
</html>
