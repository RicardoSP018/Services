@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Editar usuario {{$user->name}}</h2>
                @if($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
<<<<<<< HEAD
                <form enctype="multipart/form-data" action="{{route('usuarios.update', $user->id)}}" method="POST">
=======
                <form action="{{route('usuarios.update', $user->id)}}" method="POST">
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
                    @method('PATCH')
                    @csrf
                 <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Ingresa tu nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Correo</label>
                            <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Ingresa tu correo">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Contraseña <span class="small">(Opcional)</span> </label>
                            <input type="password" name="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirmar contraseña <span class="small">(Opcional)</span></label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Rol</label>
                            <select name="rol" class="form-control">
                                <option selected disabled>Rol</option>
                                @foreach($roles as $role)
                                    @if($role->nombre == str_replace(array('["', '"]'), '', $user->tieneRol()))
                                        <option value="{{$role->id}}" selected>{{$role->nombre}}</option>

                                    @else
                                        <option value="{{$role->id}}">{{$role->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Area</label>
                            <select name="area" class="form-control">
                                <option selected disabled>Area</option>
                                @foreach($areas as $area)
                                    @if($area->nombre == str_replace(array('["', '"]'), '', $user->tieneArea()))
                                        <option value="{{$area->id}}" selected>{{$area->nombre}}</option>

                                    @else
                                        <option value="{{$area->id}}">{{$area->nombre}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Imagen</label>
                            <input type="file" name="imagen" class="form-control">
<<<<<<< HEAD
                            @if($user->imagen != "")
=======
                            @if($user->imagen !="")
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
                                <img src="{{asset('imagenes/'. $user->imagen)}}" alt="{{$user->imagen}}" height="50px" width="50px">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>

                        </div>
                    </div>
                </form>
@endsection
