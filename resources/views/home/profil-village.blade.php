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
            <h2>Tentang Desa</h2>
            <hr>

            <iframe width="400" height="209" src="https://www.youtube.com/embed/VfE0qDz6vKE"
                title="“Cerita BudayaDesa Ngadas” || TRADISI RITUAL PANGLUKAT (ENTAS-ENTAS)" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

            <p>
                Topografi ketinggian desa ini adalah berupa daratan sedang yaitu sekitar 2300 m di atas permukaan air laut.
                Berdasarkan data BPS kabupaten Malang tahun 2009, selama tahun 2009 curah hujan di Desa Ngadas rata-rata
                mencapai 3000 mm. Curah hujan terbanyak terjadi pada bulan Januari hingga mencapai 3500 mm yang merupakan
                curah hujan tertinggi selama kurun waktu 2000-2009. Jarak tempuh Desa Ngadas ke ibu kota kecamatan adalah 26
                km, yang dapat ditempuh dengan waktu sekitar 60 menit. Sedangkan jarak tempuh ke ibu kota kabupaten adalah
                48 km, yang dapat ditempuh dengan waktu sekitar 120 menit.
            </p>
            <h2>Sejarah</h2>
            <hr>

            <p>
                Berdasarkan cerita rakyat pada masa terdahulu Desa Ngadas masih berupa hutan belantara dan disitu banyak
                tumbuh-tumbuhan ADAS PULO WARAS yang kemudian datanglah seseorang yang bernama Mbah Sidik (Sedek) yang
                ceritanya berasal dari daerah jawa tengah tepatnya daerah Solo atau Surakarta dan melakukan babat alas,
                bersama keluarga dan kerabatnya hingga perkembangannya menjadi sebuah perkampungan dan nama Ngadas di ambil
                dari nama Adas Pulo Waras .dan desa ngadas merupakan desa yang masih kuat adat istiadatnya sehingga segala
                peraturan yang dibuat Pemerintah Desa selalu dipatuhi oleh semua warga masyarakat.
            </p>

            <h2>Peta Sarana Prasarana</h2>
            <hr>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/Website.png" alt="peta sarana">
            <p>
                Terdiri dari 8 RT Desa Ngadas memiliki luas Wilayah 395 Ha. Luas lahan yang ada terbagi ke dalam beberapa
                peruntukan, yang dapat dikelompokkan seperti untuk fasilitas umum, pemukiman, pertanian, perkebunan,
                kegiatan ekonomi dan lain-lain. Sekolah yang terdapat di Desa Ngadas hanya sampai menengah pertama, untuk
                menengah keatas masyarakat harus menempuh sekolah yang berada di desa tetangga Kegiatan ekonomi Desa Ngadas
                ditunjang dari kegiatan pariwisata yaitu Homestay, tercatat terdapat lebih dari 10 Homestay aktif yang
                menerima tamu dari dalam maupun luar negeri dan memiliki standar yang baik dalam segi hal fasilitas.
                Terdapat 3 agama resmi di Desa Ngadas yaitu Budha, Islam, dan hindu. Sehingga terdapat 3 tempat ibadah yang
                berbeda didalam Desa Ngadas.
            </p>


        </div>

        <a href="#" class="button goTop show">
            <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline"></ion-icon>
        </a>

    </div>
@endsection
