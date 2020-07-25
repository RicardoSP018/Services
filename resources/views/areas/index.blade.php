@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">



        <h2>
            Areas
            @include('areas.modal')
        </h2>

        <table class="table">
            <thead class="table table-hover">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
            </tr>
            </thead>
            <tbody>
            @foreach($areas as $area)
                <tr>
                    <th scope="row">{{$area->id}}</th>
                    <td>{{$area->nombre}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
@endsection

