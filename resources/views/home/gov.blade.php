@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle"> {{ $village_data->title }} </div>
        <div class="right">

        </div>
    </div>
    <!-- * App Header -->
@endsection
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule" class="mb-4">

        <div class="section full" style="margin-top: -4rem">
            <div class="card bg-dark text-white text-center">
                @if ($check == 0)
                    <img src=" {{ asset('assets_admin/img/no-image.png') }} " class="card-img overlay-img" alt="image">
                @else
                    <img src=" {{ asset('/storage/' . $village_data->thumbnail) }} " class="card-img overlay-img"
                        alt="image">
                @endif
                <div class="card-img-overlay">
                    <h5 class="mt-5 pt-3 h3 text-white text-capitalize"> {{ $title }} </h5>
                </div>
            </div>
        </div>
        <div class="section mt-2">
            <h2 class="mt-3">Perangkat Desa</h2>
            <hr>
            <ul class="listview image-listview media">
                @foreach ($people as $item)
                    <li>
                        <div class="item">
                            <div class="imageWrapper">
                                <img src=" {{ asset('/storage/' . $item->photo) }} " alt="image" class="imaged w64">
                            </div>
                            <div class="in">
                                <div>
                                    {{ $item->name }}
                                    <div class="text-muted">
                                        {{ $item->title }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
                @if ($anggaran->thumbnail)
                    <h2 class="mt-3">Anggaran Desa</h2>
                    <hr>
                    <a class="btn btn-primary" href=" {{ asset('/storage/' . $anggaran->thumbnail) }} ">Unduh Data Anggaran
                        Desa</a>
                @endif


            </ul>

            <a href="#" class="button goTop show">
                <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                </ion-icon>
            </a>

        </div>
        <!-- * App Capsule -->
    @endsection
