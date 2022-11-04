@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle"> $title </div>
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

                <img src=" {{ asset('assets/img/custom/culture.jpg') }} " class="card-img overlay-img" alt="image">
                <div class="card-img-overlay">
                    <h5 class="mt-5 pt-3 h3 text-white text-capitalize"> {{ $title }} </h5>
                </div>
            </div>
        </div>


        <div class="section mt-2">
            <table class="table table-bordered">
                @foreach ($agenda as $item)
                    <tr>
                        <td colspan="2" class="text-center bg-gradient h6 text-white"> {{ $item->tanggal }} </td>
                    </tr>
                    <tr>
                        <td class="h6 p-2"> {{ $item->name }} </td>
                        <td class="h6 p-2">
                            {{ $item->start }} - {{ $item->end }} WIB
                        </td>
                    </tr>
                @endforeach

            </table>
            <a href="#" class="button goTop show">
                <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                </ion-icon>
            </a>

        </div>
        <!-- * App Capsule -->
    @endsection
