@extends('layout.master')
@section('header')
    <div class="appHeader no-border">
        <div class="left">
            <a href=" {{ url()->previous() }} " class="headerButton">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline">
                </ion-icon>
            </a>
        </div>
        <div class="pageTitle">Aspirasi Masyarakat</div>
        <div class="right">

        </div>
    </div>
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Cari...">
                <i class="input-icon">
                    <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline">
                    </ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
@endsection
@section('content')
    <div id="appCapsule">
        <div class="section mt-2">
            <div class="card text-center bg-gradient">

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


        <div class="section mt-2">
            @foreach ($aspirations as $item)
                <div class="card bg-light mb-2">
                    <div class="card-body">

                        <div class="d-flex">
                            <div class="w-50">
                                <p class="card-title text-capitalize"> {{ $item->name }} </p>
                            </div>
                            <div class="w-50">
                                <p class="card-text text-right"><small>
                                        {{ Carbon\Carbon::parse($item->created_at)->format('H:i . d-M-y ') }}
                                    </small></p>
                            </div>
                        </div>
                        <p class="card-text"> {!! $item->aspiration !!} </p>

                        {{-- <p class="card-text small text-success">1 Balasan</p> --}}
                    </div>
                    {{-- <div class="p-2  bg-green">
                        <p class="card-text text-primary font-italic font-weight-bold">Admin</p>
                        <p class="card-text text-primary font-italic">Masukan sudah diterima, terimakasih</p>
                    </div> --}}
                </div>
            @endforeach

        </div>
        <a href="#" class="button goTop show">
            <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline"></ion-icon>
        </a>

    </div>
@endsection
