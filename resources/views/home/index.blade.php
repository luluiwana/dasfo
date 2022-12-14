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

        <div class="section  mt-3 mb-3">
            <h4 class="h4 pl-2 font-weight-bold">Data</h4>
            <div class="row">

                <div class="item w-50 p-2">
                    <a href=" {{ route('info', 'Profil') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-profil.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Profil Desa</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item w-50 p-2">
                    <a href=" {{ route('gov', 'Pemerintahan') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-pemerintahan.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Pemerintahan</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item w-50 p-2">
                    <a href=" {{ route('agenda') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-agenda.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Agenda</h4>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item w-50 p-2">
                    <a href=" {{ route('info', 'sosial') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-sosial.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Sosial</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item w-50 p-2">
                    <a href=" {{ route('info', 'budaya') }} ">
                        <div class="card">
                            <img src="{{ asset('assets/img/custom/icon-budaya.png') }}" class="card-img-top home-icon"
                                alt="image">
                            <div class="card-body pt-2 text-center">
                                <h4 class="mb-0">Budaya</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item w-50 p-2">
                    <a href=" {{ route('info', 'pariwisata') }} ">
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
            @foreach ($news as $item)
                <a href=" {{ route('article', $item->id) }} ">
                    <div class="card mb-2">
                        <img src=" {{ asset('/storage/' . $item->thumbnail) }} " class="card-img-top" alt="image">
                        <div class="card-body">
                            <h5 class="h5">
                                {{ $item->title }}
                            </h5>

                            <p class="card-text text-secondary"><small>
                                    {{ $item->tanggal }}
                                </small></p>
                        </div>
                    </div>
                </a>
            @endforeach






            <a href=" {{ route('news') }} " class="btn btn-primary rounded mr-1 my-2 btn-block">Lihat Semua Berita</a>
        </div>





    </div>
    <!-- * App Capsule -->
@endsection
