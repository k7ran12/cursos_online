@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('categoria.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre Categoria</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Categoria" required>
                </div>
                <button class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
