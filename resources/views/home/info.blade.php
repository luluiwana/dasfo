@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle">Sosial</div>
        <div class="right">

        </div>
    </div>
    <!-- * App Header -->
@endsection
@section('content')
    <!-- App Capsule -->
    <div id="appCapsule">

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
            <div class="section mt-2">
                @if ($check > 0)
                    {!! $village_data->content !!}
                @endif

            </div>
            <a href="#" class="button goTop show">
                <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                </ion-icon>
            </a>

        </div>
        <!-- * App Capsule -->
    @endsection
