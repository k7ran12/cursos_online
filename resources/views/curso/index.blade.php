@extends('layouts.app')
@section('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
    </div>
    @endif
    <a href="{{ route('curso.create') }}" class="btn btn-primary">Crear Curso</a>
    <h1>Lista de Cursos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre Cursos</th>
                <th>Nombre Instructor</th>
                <th>Carpeta</th>
                <th>Categoria</th>
                <th>Administrar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombre_cursos }}</td>
                <td>{{ $curso->nombre_instructor }}</td>
                <td>{{ $curso->carpeta }}</td>
                <td>{{ $curso->categoria_id }}</td>
                <td><a href="{{ route('bloque.index', $curso->id) }}" class="btn btn-success"><i></i>Administrar curso</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection
