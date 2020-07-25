@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Asignar un trabajo <a href="asignacions/create"><button type="button" class="btn btn-light float-right">Asignar Nuevo</button></a></h2>

        <table class="table">
  <thead class="table table-hover">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Estatus</th>
      <th scope="col">Trabajo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Fecha</th>
        <th scope="col">Usuario</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($asignacions as $asignacion)
    <tr>
      <th scope="row">{{$asignacion->id}}</th>
      <td>{{$asignacion->status}}</td>

      <td>
        @foreach($asignacion->reportes as $reporte)
        {{$reporte->nombre}}</td>
        @endforeach



<td>
          <form action="{{route('asignacions.destroy', $asignacion->id)}}" method='POST'>

          <a href="{{route('asignacions.show', $asignacion->id)}}"><button type="button" class="btn btn-dark btn-sm"><i class="far fa-eye"></i></button></a>
          <a href="{{route('asignacions.edit', $asignacion->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
            @csrf
            @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-user-minus"></i></button>
          </form>

      </td>


    </tr>
    @endforeach
  </tbody>
</table>

    </div>
@endsection
