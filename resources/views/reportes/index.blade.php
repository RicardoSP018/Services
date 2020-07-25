@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">



        <h2>
            Reportes
        </h2>

        <table class="table">
            <thead class="table table-hover">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Alumno/Docente</th>
                <th scope="col">Nombre Reporte</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Area</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($reporte as $r)
                <tr>
                    <th scope="row">{{$r['id']}}</th>
                    <td>{{$r['nombrePer']}}</td>
                    <td>{{$r['tipoPer']}}</td>
                    <td>{{$r['nombreReporte']}}</td>
                    <td>{{$r['descripcion']}}</td>
                    <td>{{$r['area']}}</td>
                    <td>{{$r['fecha']}}</td>

                    <td><form action="{{route('reportes.destroy', $r->id)}}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
@endsection

