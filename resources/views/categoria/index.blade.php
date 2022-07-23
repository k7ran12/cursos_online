@extends('layouts.app')
@section('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
    </div>
    @endif
    <a href="{{ route('categoria.create') }}" class="btn btn-primary">Crear categoria</a>
    <h1>Lista de videos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection
