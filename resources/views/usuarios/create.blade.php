@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Agregar nuevo usuario</h2>
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
           <form action="/usuarios" method="POST" enctype="multipart/form-data">
            @csrf

               <div class="row">
                   <div class="form-group col-md-6">
                       <label>Nombre</label>
                       <input type="text" name="name" class="form-control" placeholder="Ingresa tu nombre">
                   </div>
                   <div class="form-group col-md-6">
                       <label>Correo</label>
                       <input type="email" name="email" class="form-control" placeholder="Ingresa tu correo">
                   </div>
               </div>

               <div class="row">
                   <div class="form-group col-md-6">
                       <label>Contrasela</label>
                       <input type="password" name="password" class="form-control" placeholder="Ingresa una contraseña">
                   </div>
                   <div class="form-group col-md-6">
                       <label>Confirmar contrasela</label>
                       <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña">
                   </div>
               </div>

               <div class="row">
               <div class="form-group col-md-6">
                   <label>Rol</label>
                   <select name="rol" class="form-control">
                       <option selected disabled>Rol</option>
                       @foreach($roles as $role)
                       <option value="{{$role->id}}">{{$role->nombre}}</option>
                       @endforeach
                   </select>
               </div>

                   <div class="form-group col-md-6">
                       <label>Imagen</label>
                       <input type="file" name="imagen" class="form-control">
                   </div>
               </div>
  <div class="row">
      <div class="form-group col-md-6">
          <label>Area <span class="small">(Solo trabajador)</span></label>
          <select name="area" class="form-control">
              <option selected disabled>Area</option>
              @foreach($areas as $area)
                  <option value="{{$area->id}}">{{$area->nombre}}</option>
              @endforeach
          </select>
      </div>

      <div class="form-group">
  <button type="submit" class="btn btn-primary">Registrar</button>
          <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>
        </div>
           </form>
@endsection
