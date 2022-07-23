@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('bloque.store', request()->id) }}">
                @csrf
                <input type="hidden" name="curso_id" id="curso_id" value="{{ request()->id }}">
                <div class="form-group">
                    <label for="nombre_bloque">Nombre Bloque</label>
                    <input type="text" class="form-control" name="nombre_bloque" id="nombre_bloque" placeholder="Nombre Categoria" required>
                </div>
                <button class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
