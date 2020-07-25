@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$user->name}}</h1>
    <p class="lead">{{$user->email}}</p>
    <a href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
  </div>
</div>
@endsection