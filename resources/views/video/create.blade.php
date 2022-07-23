@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('video.store', ['id' => request()->id, 'id_bloque' => request()->id_bloque]) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ request()->id }}" name="curso_id" id="curso_id">
                <input type="hidden" value="{{ request()->id_bloque }}" name="id_bloque" id="id_bloque">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Elegir video</label>
                    <input multiple type="file" name="file[]" class="form-control-file" id="file[]">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
