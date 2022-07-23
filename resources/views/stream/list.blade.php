@extends('layouts.stream')
@section('content')
<!-- main-area -->
<main>
    <!-- movie-details-area -->
    @foreach ($videos as $video)
    <section class="movie-details-area" data-background="{{ asset('img/bg/movie_details_bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-xl-3 col-lg-4">
                    <div class="movie-details-img">
                        <img src="https://www.redvirtual.bid/wp-content/uploads/2021/04/Curso-QA-Automation-Testing-con-Python-y-Selenium-WebDriver-310x165.jpg"
                            alt="">
                        <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><img
                                src="img/images/play_icon.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="movie-details-content">
                        <h2>{{ $video->nombre_cursos }}</h2>
                        <div class="banner-meta">
                            <ul>
                                <li class="category">
                                    <a href="#">{{ $video->categoria->nombre }}</a>
                                </li>
                                <li class="release-time">
                                    <span><i class="far fa-calendar-alt"></i> 2021</span>
                                </li>
                            </ul>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many
                            variations of passages of lorem
                            Ipsum available, but the majority have suffered alteration in some injected humour.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- movie-details-area-end -->

    <!-- episode-area -->
    <section class="episode-area episode-bg" data-background="{{ asset('img/bg/episode_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="movie-episode-wrap">
                        <div class="episode-top-wrap">
                            <div class="section-title">
                                <span class="sub-title">Cursos Online</span>
                                <h2 class="title">Mirar todos los videos</h2>
                            </div>
                            <div class="total-views-count">
                                <p><i class="far fa-eye"></i></p>
                            </div>
                        </div>
                        <div class="episode-watch-wrap">
                            <div class="accordion" id="accordionExample">
                                @foreach($video->bloque as $bloq)
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <button class="btn-block text-left collapsed" type="button"
                                            data-toggle="collapse"
                                            data-target="#{{ str_replace(' ', '', $video->nombre_cursos).$bloq->id }}"
                                            aria-expanded="false"
                                            aria-controls="{{ str_replace(' ', '', $video->nombre_cursos).$bloq->id }}">
                                            <span class="season">{{ $bloq->nombre_bloque }}</span>
                                            <span class="video-count">{{ count($bloq->videos) }} videos</span>
                                        </button>
                                    </div>
                                    <div id="{{ str_replace(' ', '', $video->nombre_cursos).$bloq->id }}"
                                        class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                @foreach ($bloq->videos as $vid)
                                                <li style="padding-bottom: 30px"><video style="width:100%" controls
                                                        src="/storage/{{ $video->carpeta . '/' . $bloq->nombre_bloque . '/' . $vid->nombre_video }}"
                                                        class="popup-video"><i class="fas fa-play"></i></video>{{ $vid->nombre_video }} <span class="duration"><i
                                                            class="far fa-clock"></i> {{ $vid->tiempo }}</span>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="episode-img">
                        <img src="https://www.redvirtual.bid/wp-content/uploads/2021/04/Curso-QA-Automation-Testing-con-Python-y-Selenium-WebDriver-310x165.jpg"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- episode-area-end -->
    @endforeach


</main>
<!-- main-area-end -->
@endsection
