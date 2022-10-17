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
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline" role="img" class="md hydrated" aria-label="search outline"></ion-icon>
            </a>
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
            @for ($i = 0; $i < 10; $i++)
                <div class="card mb-2">
                    <a href=" {{ route('article', '1') }} " class="">
                        <div class="d-flex">
                            <div class="news-thumbnail"
                                style="background:url('https://desangadas.com/wp-content/uploads/2022/08/sadran3-300x178.jpg')">

                            </div>
                            <div class="w-70 p-2">
                                <h5 class="h6">Sadranan atau Nyadran, Puncak Sekaligus Penutup dari Rangkaian Upacara
                                    Hari Raya Karo
                                    Suku Tengger di Desa Ngadas</h5>

                                <p class="card-text text-secondary"><small>Senin, 17 oktober 2022</small></p>
                            </div>

                        </div>
                    </a>
                    <a href=" {{ route('article', '2') }} " class="">
                        <div class="d-flex">
                            <div class="news-thumbnail"
                                style="background:url('https://desangadas.com/wp-content/uploads/2022/08/sadranan-1.jpg')">

                            </div>
                            <div class="w-70 p-2">
                                <h5 class="h6">Mengenal Lebih Jauh Hari Raya Karo, Serangkaian Upacara Adat yang
                                    Diselenggarakan oleh Masyarakat Suku Tengger di Desa Ngadas</h5>

                                <p class="card-text text-secondary"><small>Senin, 17 oktober 2022</small></p>
                            </div>

                        </div>
                    </a>
                </div>
            @endfor

        </div>
    </div>
@endsection
