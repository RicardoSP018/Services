@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">



        <h2>
            Solicitudes
        </h2>

        <table class="table">
            <thead class="table table-hover">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Opciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($solicitud as $s)
                <tr>
                    <th scope="row">{{$s['id']}}</th>
                    <th scope="row">{{$s['nombre']}}</th>
                    <th scope="row">{{$s['descripcion']}}</th>
                    <td>{{$s['fecha']}}</td>
                    <td><form action="{{route('solicituds.destroy', $s->id)}}" method='POST'>
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

