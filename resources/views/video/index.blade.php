@extends('layouts.app')
@section('content')
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
    </div>
    @endif
    <a href="{{ route('video.create', ['id' => request()->id, 'id_bloque' => request()->id_bloque]) }}" class="btn btn-primary">Agregar Video</a>
    <!--<a href="" class="btn btn-primary">Agregar Videos</a>-->
    <h1>Lista de videos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre_video</th>
                <th>tiempo</th>
                <th>bloque</th>
                <th>bloque_id</th>
            </tr>
        </thead>
        <tbody>
            @if ($videos != null)
                @foreach ($videos as $video)
            <tr>
                <td>{{ $video->id }}</td>
                <td>{{ $video->nombre_video }}</td>
                <td>{{ $video->tiempo }}</td>
                <td>{{ $video->bloque }}</td>
                <td>{{ $video->bloque_id }}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

</div>
@endsection
