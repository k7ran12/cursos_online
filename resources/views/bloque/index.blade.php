@extends('layouts.app')
@section('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
    </div>
    @endif
    <a href="{{ route('bloque.create', request()->id) }}" class="btn btn-primary">Agregar Bloque</a>
    <!--<a href="" class="btn btn-primary">Agregar Videos</a>-->
    <h1>Lista de bloques</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre bloque</th>
                <th>Carpeta</th>
                <th>Curso</th>
                <th>Administrar Videos</th>
            </tr>
        </thead>
        <tbody>
            @if ($curso_bloque != null)
                @foreach ($curso_bloque as $bloque)
            <tr>
                <td>{{ $bloque->id }}</td>
                <td>{{ $bloque->nombre_bloque }}</td>
                <td>{{ $bloque->carpeta }}</td>
                <td>{{ $bloque->curso_id }}</td>
                <td><a href="{{ route('video.lista', ['id' => request()->id, 'id_bloque' => $bloque->id]) }}" class="btn btn-success">Administrar Videos</a></td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>


</div>
@endsection
