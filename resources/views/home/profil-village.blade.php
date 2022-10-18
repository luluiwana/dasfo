@extends('layout.master')
@section('header')
 <!-- App Header -->
 <div class="appHeader scrolled bg-success">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>

        </a>
    </div>
    <div class="pageTitle">Profil Desa</div>
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
                <h5 class="mt-5 pt-3 h3 text-white">Profil Desa</h5>
            </div>
        </div>
    </div>


    <div class="section mt-2">
        <div class="header-large-title p-0">
            <h2 class="mt-3 mb-1">Sejarah</h2>
            <div class="divider bg-dark  mb-3"></div>
        </div>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet leo eget maximus ultricies. Nunc
            vitae enim facilisis tortor aliquet ullamcorper nec at tortor. Vivamus lobortis, orci et commodo
            pulvinar, eros nibh volutpat ipsum, in rhoncus risus dolor sed ipsum. Interdum et malesuada fames ac
            ante ipsum primis in faucibus. Donec nisi odio, dapibus in felis vel, lobortis iaculis quam.
            Pellentesque porttitor ante eu varius elementum. Etiam in interdum sapien. Maecenas facilisis dolor eget
            condimentum iaculis. Curabitur ac accumsan purus. Suspendisse tristique suscipit lorem, eget pretium
            erat congue ac. In hac habitasse platea dictumst. Fusce a turpis ac lacus dictum porta. Ut vestibulum
            nisi at dui pulvinar sodales. Cras et risus non odio vulputate dignissim sed tincidunt orci.
        </p>

        <div class="header-large-title p-0">
            <h2 class="mt-3 mb-1">Perangkat Desa</h2>
            <div class="divider bg-dark  mb-3"></div>
        </div>
        <ul class="listview image-listview media p-0 mb-2">
            <li>
                <div class="item">
                    <div class="imageWrapper">
                        <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w64">
                    </div>
                    <div class="in">
                        <div>
                            Birds
                            <div class="text-muted">62 photos</div>
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
                            Street Photos
                            <div class="text-muted">15 photos</div>
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
                            Dogs
                            <div class="text-muted">97 photos</div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <a href="#" class="button goTop show">
        <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline"></ion-icon>
    </a>

</div>
@endsection
