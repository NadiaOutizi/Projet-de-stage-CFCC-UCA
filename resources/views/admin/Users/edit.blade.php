<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label{
            color: azure;
        }
    </style>
</head>
<body>
    @extends('layouts.sidebar')

    @section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
        @csrf
        @method('PUT')
        <div >
            <label>Nom:</label>
            <input type="text" name="name" value="{{$user->name}}" >
          </div>
          <div >
            <label>Email:</label>
            <input type="text"  name="email" value="{{ $user->email}}">
          </div>
          <div >
            <label>is_admin:</label>
            <input type="text" name="is_admin"  value="{{$user->is_admin}}" >
          </div>
         
        </div>
        </div><br><br>
        <button type="submit" class="btn btn-light">Modifier</button>
    </form>
    @endsection
</body>
</html>
