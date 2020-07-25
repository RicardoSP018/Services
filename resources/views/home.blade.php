@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-primary" role="alert"> <h1 class="text-center">Bienvenido {{Auth::user()->name}}</h1>
            </div>
        </div>

<div class="list-group col-md-12">
     @foreach($reporte as $r)
  <a href="/reportes/{{$r->id}}" class="list-group-item list-group-item-action" style="background-color: #B8FFCB">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$r->nombreReporte}}</h5>
      <small>{{$r->fecha}}</small>
    </div>
   
    <p class="mb-1">{{$r->nombrePer}}</p>
  </a>
 @endforeach
  @foreach($trabajos as $trabajo)
  <a href="/trabajos" class="list-group-item list-group-item-action" style="background-color: #BEB8FF">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Trabajo: {{$trabajo->user->name}}</h5>
      <small class="text-muted">{{$trabajo->estatus}}</small>
    </div>
    <small class="text-muted">{{$trabajo->fecha}}</small>
  </a>
  @endforeach

  @foreach($solicitudes as $s)
  <a href="/solicituds" class="list-group-item list-group-item-action" style="background-color: #FFB8B8">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{$s->nombre}}</h5>
      <small class="text-muted">{{$s->fecha}}</small>
    </div>
    <p class="mb-1">{{$s->descripcion}}</p>
  </a>
  @endforeach
</div>
</div>
@endsection
