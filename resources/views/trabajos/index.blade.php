@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de pendientes <a href="trabajos/create"><button type="button" class="btn btn-light float-right">Nuevo</button></a></h2>

        <table class="table">
  <thead class="table table-hover">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">Estatus</th>
      <th scope="col">Nombre Reporte</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Usuario</th>
      <th scope="col">Opciones</th>

    </tr>
  </thead>
  <tbody>
    @foreach($trabajos as $trabajo)
    <tr>
      <th scope="row">{{$trabajo->id}}</th>
      <td>{{$trabajo->fecha}}</td>
        <td>{{$trabajo->estatus}}</td>

        <td>
            @foreach($trabajo->reportes as $reporte)
            {{$reporte->nombreReporte}}</td>
            <td>{{$reporte->descripcion}}</td>
        @endforeach

          <td>
            {{$trabajo->user->name}}</td>


        <td>

          <form action="{{route('trabajos.destroy', $trabajo->id)}}" method='POST'>

          <a href="{{route('trabajos.show', $trabajo->id)}}"><button type="button" class="btn btn-dark btn-sm"><i class="far fa-eye"></i></button></a>
          <a href="{{route('trabajos.edit', $trabajo->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
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
