@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$user->name}}</h1>
    <p class="lead">{{$user->email}}</p>
<<<<<<< HEAD
    <a href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
  </div>
</div>
@endsection