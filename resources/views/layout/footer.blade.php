<!-- App Bottom Menu -->
<div class="appBottomMenu rounded bg-success text-light">
    @if ($menu == 'Beranda')
        <a href=" {{ route('home') }} " class="item active">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Beranda</strong>
            </div>
        </a>
    @else
        <a href=" {{ route('home') }} " class="item">
            <div class="col">
                <ion-icon name="home-outline"></ion-icon>
                <strong>Beranda</strong>
            </div>
        </a>
    @endif

    @if ($menu == 'Berita')
        <a href=" {{ route('news') }} " class="item active">
            <div class="col">
                <ion-icon name="newspaper-outline"></ion-icon>
                <strong>Berita</strong>
            </div>
        </a>
    @else
        <a href=" {{ route('news') }} " class="item">
            <div class="col">
                <ion-icon name="newspaper-outline"></ion-icon>
                <strong>Berita</strong>
            </div>
        </a>
    @endif
    @if ($menu == 'Forum')
        <a href=" {{ route('forum') }} " class="item active">
            <div class="col">
                <ion-icon name="chatbubbles-outline"></ion-icon>
                <strong>Aspirasi</strong>
            </div>
        </a>
    @else
        <a href="{{ route('forum') }}" class="item">
            <div class="col">
                <ion-icon name="chatbubbles-outline"></ion-icon>
                <strong>Aspirasi</strong>
            </div>
        </a>
    @endif


</div>
<!-- * App Bottom Menu -->



<!-- ///////////// Js Files ////////////////////  -->
<!-- Jquery -->
<script src="{{ asset('assets/js/lib/jquery-3.4.1.min.js') }}"></script>
<!-- Bootstrap-->
<script src="{{ asset('assets/js/lib/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
<!-- Owl Carousel -->
<script src="{{ asset('assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<!-- jQuery Circle Progress -->
<script src="{{ asset('assets/js/plugins/jquery-circle-progress/circle-progress.min.js') }}"></script>
<!-- Base Js File -->
<script src="{{ asset('assets/js/base.js') }}"></script>
