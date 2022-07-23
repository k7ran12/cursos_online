@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('curso.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre Curso</label>
                    <input type="text" class="form-control" name="nombre_cursos" id="nombre_cursos" placeholder="Nombre Cursos" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre Instructor</label>
                    <input type="text" class="form-control" name="nombre_instructor" id="nombre_instructor" placeholder="Nombre Instructor" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Categoria</label>
                    <input type="text" class="form-control" name="categoria_id" id="categoria_id" placeholder="Categoria" required>
                </div>

                <button class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
