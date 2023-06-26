<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.sidebar')
@section('content') 
    <h3 class="text-center ">Modifier Evenement</h3>
    <form method="POST" action="{{ route('evenements.update', $event->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="text-light">Nom :</label>
                <input type="text" name="nom" value="{{ $event->nom }}" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="text-light">Date:</label>
                <input type="date" name="date" value="{{ $event->date }}" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="text-light">Description :</label>
                <input type="text" name="description" value="{{ $event->description }}" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label class="text-light">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group col-md-6">
                <label class="text-light">User:</label>
                <select name="user_id" class="form-control">
                    <option value="choose an id" aria-readonly="false">Choose a User</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $event->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <label class="text-light">Centre:</label>
                <select name="centre_id" class="form-control">
                    <option value="choose an id" aria-readonly="false">Choose a Centre</option>
                    @foreach ($centres as $centre)
                        <option value="{{ $centre->id }}" {{ $event->centre_id == $centre->id ? 'selected' : '' }}>
                            {{ $centre->nom }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br />

            <input type="submit" value="Modifier Evenement" class="btn btn-primary" />
        </div>
    </form>
@endsection

</body>
</html>