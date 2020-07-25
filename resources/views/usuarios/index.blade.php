@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de usuarios registrados

            <a href="usuarios/create"><button type="button" class="btn btn-light float-right">Nuevo</button></a></h2>


        <table class="table">
  <thead class="table table-hover">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
        <th scope="col">Rol</th>
        <th scope="col">Imagen</th>
        <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
        <td>
            @foreach($user->roles as $role)
            {{$role->nombre}}</td>
        @endforeach
        <td>
            <img src="{{asset('imagenes/'.$user->imagen)}}" alt="{{$user->imagen}}" height="50px" width="50px">
        </td>

        <td>

          <form action="{{route('usuarios.destroy', $user->id)}}" method='POST'>

          <a href="{{route('usuarios.show', $user->id)}}"><button type="button" class="btn btn-dark btn-sm"><i class="far fa-eye"></i></button></a>
          <a href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button></a>
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
