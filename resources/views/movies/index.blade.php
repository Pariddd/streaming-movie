@extends('layouts.app')

@section('content')
    <div class="container-fluid section-jumbotron">
        <div class="jumbotron">
            <div class="jumbotron-content">
                <div class="row align-items-center">
                    <div class="col-md-5 col-7">
                        <div class="py-4 ms-4">
                            <h1 class="display-4 jumbotron-title">Kimetsu No Yaiba</h1>
                            <p class="lead">
                                Sejak dahulu, beredar rumor bahwa iblis pemakan manusla yang bersembunvi di dalam hutan akan muncul pada malam hari karena itu, para pendudulk tak ada yang berani keluar malam-malam. Dan paca saat yang sama akan muncul para pembunuh iblis(demon slayer) yang berkeliaran pada malam hari untuk memburu iblis.
                            </p>
                            <a class="btn btn-primary btn-play btn-md-lg" href="#" role="button">Play</a>
                        </div>
                    </div>
                    <div class="col-md-7 col-5 jumbotron-img">
                        <div class="jumbotron-layer"></div>
                        <img src="assets/img/jumbotron.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3 class="new-added-title">New Added</h3>
    <section>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/deathnote.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/Blackclover.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/naruto.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/onepiece.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/anya.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/sololeveling.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <h3 class="new-added-title">Trending</h3>
    <section>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/hxh.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/kiminonawa.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/jujutsu.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/Tsukimichi.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/WindBreaker.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img src="assets/img/DemonSlayer.png" class="img-fluid h-100" alt="...">
                        <span class="badge rounded-pill text-bg-dark badge-rating">
                            <img class="star-rating" src="assets/img/star-rating.png" alt="">
                            (8,3)
                        </span>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
@endsection