@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear un trabajo</h2>
            </div>
        </div>
           <form action="/trabajos" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="row">
               <div class="form-group col-md-6">
                   <label>Estatus actual</label>
                   <select name="estatus" class="form-control">
                       <option selected disabled>Estatus Actual</option>
                       <option value="Activo">Activo</option>
                       <option value="En proceso">En proceso</option>
                       <option value="Completado">Completado</option>
                   </select>
               </div>

                <div class="form-group">
                       <label class="control-label">Fecha</label>
                       <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($asignacion->fecha) ? $asignacion->fecha : ''}}" >
                   </div>
                 </div>

               <div class="row">
               <div class="form-group col-md-6">
                   <label>Reporte</label>
                   <select name="reporte" class="form-control">
                       <option selected disabled>Reporte</option>
                       @foreach($reportes as $reporte)
                       <option value="{{$reporte->id}}">{{$reporte->nombreReporte}}</option>
                       @endforeach
                   </select>
               </div>
             </div>

             <div class="row">
                           <div class="form-group col-md-6">
                               <label>Trabajador</label>
                               <select name="user_id" class="form-control">
                                   <option selected disabled>Trabajador</option>
                                   @foreach($users as $user)
                                       <option value="{{$user->id}}">{{$user->name}}</option>
                                   @endforeach
                               </select>
                           </div>


               

      <div class="form-group">
  <button type="submit" class="btn btn-primary">Registrar</button>
          <button type="reset" class="btn btn-danger">Cancelar</button>

            </div>
        </div>
               </div>
           </form>
@endsection
