@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle">Baca Berita</div>
        <div class="right">

        </div>
    </div>
    <!-- * App Header -->
@endsection
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="section full" style="margin-top: -4rem">
            <div class="card bg-dark text-white">
                <img src=" {{ asset('/storage/' . $news->thumbnail) }} " class="card-img overlay-img" alt="image">
                <div class="card-img-overlay">
                    {{-- <h5 class="mt-5 pt-3 h3 text-white">Judul Artikel Pengumuman atau Berita</h5> --}}
                </div>
            </div>
        </div>
        <div class="header-large-title">
            <h1 class="h3 mt-1">
                {{ $news->title }}
            </h1>
            <h2 class="subtitle text-secondary"> {{ $news->tanggal }} </h2>
        </div>

        <div class="section mt-2">
            {!! $news->content !!}


        </div>
        <a href="#" class="button goTop show">
            <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
            </ion-icon>
        </a>

    </div>
    <!-- * App Capsule -->
@endsection
