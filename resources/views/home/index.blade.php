@extends('layout.master')
@section('title', 'Dasfo')
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full" style="margin-top: -4rem">
            <div class="card bg-dark text-white">
                <img src="{{ asset('assets/img/custom/bromo.png') }}" class="card-img overlay-img" alt="image">
                <div class="card-img-overlay">
                    <h5 class="mt-5 pt-3 h3 text-white">Dasfo.</h5>
                    <p class="card-text">Informasi Masyarakat Desa Ngadas, Kecamatan Poncokusumo, Kabupaten Malang</p>
                </div>
            </div>
        </div>

        <div class="section full mt-3 mb-3">
            <h4 class="h4 pl-2 font-weight-bold">Data</h4>
            <div class="carousel-multiple owl-carousel owl-theme">

                <div class="item">
                    <a href=" {{ route('goverment') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-pemerintahan.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Pemerintahan Desa</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href=" {{ route('social') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-sosial.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Sosial</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href=" {{ route('culture') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-budaya.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Budaya</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href=" {{ route('travel') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-pariwisata.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Pariwisata</h4>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
        <div class="section mt-2">
            <div class="card text-center bg-gradient">
                <div class="card-header">
                    <img src=" {{ asset('assets/img/custom/icon-mail.png') }} " alt="image" class="imaged w64 rounded">
                </div>
                <div class="card-body">
                    <h5 class="h4  text-white">Suarakan aspirasi, aduan, harapan, dan usulan Anda!</h5>
                    <a href=" {{ route('addforum') }} " class="btn btn-success mr-1 mb-1 rounded mt-3 btn-lg">
                        <ion-icon name="mail-open-outline" role="img" class="md hydrated"
                            aria-label="mail-open-outline"></ion-icon>
                        Tulis Aspirasi
                    </a>
                </div>
            </div>
        </div>
        <div class="section mt-4">
            <h4 class="h4 font-weight-bold">Berita Terbaru</h4>
            @for ($i = 0; $i < 3; $i++)
                <a href=" {{ route('article', '1') }} ">
                    <div class="card mb-2">
                        <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/jokowi-f0192.jpg"
                            class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="h4">Judul Artikel Pengumuman atau Berita</h5>
                            <p class="card-text text-secondary">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text text-secondary"><small>Hari ini</small></p>
                        </div>
                    </div>
                </a>
            @endfor


            <a href=" {{ route('forum') }} " class="btn btn-primary rounded mr-1 my-2 btn-block">Lihat Semua Berita</a>
        </div>





    </div>
    <!-- * App Capsule -->
@endsection
