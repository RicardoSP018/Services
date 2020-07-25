@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Asignar trabajo</h2>
            </div>
        </div>
           <form action="/asignacions" method="POST" enctype="multipart/form-data">
            @csrf

                
                    <div class="form-group">
                        <label>Status</label>
                        <input name="status" type="text" class="form-control" id="recipient-name">
                    </div>

                     <div class="form-group">
                       <label class="control-label">Fecha</label>
                       <input class="form-control" name="fecha" type="date" id="fecha" value="{{ isset($asignacion->fecha) ? $asignacion->fecha : ''}}" >
                   </div>

                   <div class="row">
               <div class="form-group col-md-6">
                   <label>Trabajo</label>
                   <select name="trabajo" class="form-control">
                       <option selected disabled>Trabajo</option>
                       @foreach($reportes as $reporte)
                       <option value="{{$reporte->id}}">{{$reporte->nombre}}</option>
                       @endforeach
                   </select>
               </div>

                       <div class="row">
                           <div class="form-group col-md-6">
                               <label>Trabajador</label>
                               <select name="trabajador" class="form-control">
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
