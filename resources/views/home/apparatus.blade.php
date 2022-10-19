@extends('layout.master')
@section('header')
 <!-- App Header -->
 <div class="appHeader scrolled bg-success">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>

        </a>
    </div>
    <div class="pageTitle">Perangkat Desa</div>
    <div class="right">

    </div>
</div>
<!-- * App Header -->
@endsection
@section('content')
<div id="appCapsule">

    <div class="section full" style="margin-top: -4rem">
        <div class="card bg-dark text-white text-center">
            <img src=" {{ asset('assets/img/custom/goverment.jpg') }} " class="card-img overlay-img" alt="image">
            <div class="card-img-overlay">
                <h5 class="mt-5 pt-3 h3 text-white">Perangkat Desa</h5>
            </div>
        </div>
    </div>

 <div class="section mt-2">
        <div class="header-large-title p-0">
            <h2 class="mt-3 mb-1">Perangkat Desa</h2>
            <div class="divider bg-dark  mb-3"></div>
        </div>
    <ul class="listview image-listview media">
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        MUJIANTO.MR
                        <div class="text-muted">Kepala Desa</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        MISPU
                        <div class="text-muted">Staf Urusan Keuangan</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        BUASAN
                        <div class="text-muted">Staf Urusan Umum</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        WAGIRI
                        <div class="text-muted">Seksi Pembangunan</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        NUR LAILATUL F
                        <div class="text-muted">Kasi Pelayanan</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        JOKO UTOMO
                        <div class="text-muted">Kasun Jarak Ijo</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        JUMARTO
                        <div class="text-muted">Kepetengan</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        ROBIANTO
                        <div class="text-muted">Modin</div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="item">
                <div class="imageWrapper">
                    <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w64">
                </div>
                <div class="in">
                    <div>
                        PERGIANTO
                        <div class="text-muted">Kasun Ngadas</div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <a href="#" class="button goTop show">
        <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline"></ion-icon>
    </a>
</div>

</div>

@endsection
