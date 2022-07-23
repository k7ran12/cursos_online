@extends('layouts.stream')
@section('content')
    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('img/bg/hacker.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="title">Cursos <span>Online</span></h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cursos</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- movie-area -->
        <section class="movie-area movie-bg" data-background="{{ asset('img/bg/movie_bg.jpg') }}">
            <div class="container">
                <div class="row align-items-end mb-60">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-left">
                            <span class="sub-title">TRANSMISIÓN EN LINEA</span>
                            <h2 class="title">Cursos Online</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="movie-page-meta">
                            <div class="tr-movie-menu-active text-center">
                                @php
                                    $last_url = substr(strrchr(url()->current(), '/'), 1);
                                @endphp
                                <a href="{{ route('stream.index') }}" class="{{ ($last_url == "all") ? 'active' : '' }}" data-filter="*">Todo</a>
                                @foreach ($categorias as $categoria)
                                    <a href="{{ route('stream.categoria', $categoria->id) }}" class="{{ ($last_url == $categoria->id) ? 'active' : '' }}"
                                        data-filter="*">{{ $categoria->nombre }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row tr-movie-active">
                    @foreach ($cursos as $curso)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img style="width:100%" src="{{ $curso->imagen }}" alt="">
                                    <ul class="overlay-btn">
                                        <li><a href="{{ route('stream.list', $curso->id) }}" class="btn">Ver Curso</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="movie-details.html">{{ $curso->nombre_cursos }}</a></h5>
                                        <span class="date">{{ $curso->nombre_instructor }}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">{{ $curso->categoria->nombre }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $cursos->links('layouts.paginate') }}
                    </div>
                </div>
            </div>
        </section>
        <!-- movie-area-end -->

    </main>
    <!-- main-area-end -->
@endsection
