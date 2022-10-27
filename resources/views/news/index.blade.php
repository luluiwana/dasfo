@extends('layout.master')
@section('header')
    <div class="appHeader no-border">
        <div class="left">
            <a href=" {{ url()->previous() }} " class="headerButton">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline">
                </ion-icon>
            </a>
        </div>
        <div class="pageTitle">Berita</div>
        <div class="right">

        </div>
    </div>
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Cari Berita...">
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
            @forelse ($news as $item)
                <div class="card mb-2">
                    <a href=" {{ route('article', $item->id) }} " class="">
                        <div class="d-flex">
                            <div class="news-thumbnail"
                                style="background:url('{{ asset('/storage/' . $item->thumbnail) }}')">

                            </div>
                            <div class="w-70 p-2">
                                <h5 class="h6">
                                    {{ $item->title }}
                                </h5>

                                <p class="card-text text-secondary"><small>
                                        {{ $item->tanggal }}
                                    </small></p>
                            </div>

                        </div>
                    </a>

                </div>
            @empty
            @endforelse


        </div>
    </div>
@endsection
