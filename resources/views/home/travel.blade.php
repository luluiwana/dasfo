@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle">Pariwisata</div>
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
                <img src=" {{ asset('assets/img/custom/travel.png') }} " class="card-img overlay-img" alt="image">
                <div class="card-img-overlay">
                    <h5 class="mt-5 pt-3 h3 text-white">Pariwisata</h5>
                </div>
            </div>
        </div>


        <div class="section mt-2">
            <p>Sejak tahun 2007 lalu, Desa Ngadas Malang diubah menjadi desa wisata. Alasannya, karena desa ini memiliki
                potensi wisata yang menarik, seperti Ranupane, Coban Trisula, hingga petik apel. Desa Ngadas Malang berada
                dalam area teritorial Taman Nasional Bromo Tengger Semeru (TN BTS). Berada di ketinggian 2.150 meter di atas
                permukaan laut menjadikan Desa Ngadas Bromo ini menjadi salah satu desa tertinggi yang ada di Jawa. Tak
                heran kalau banyak orang menyebutnya Desa Atas Awan di Malang.</p>
            <p>Desa Ngadas Malang memiliki panorama yang luar biasa cantik. Salah satu jalanan di desa ini memiliki panorama
                langsung yang menghadap ke Gunung Bromo. Saat pagi hari, kabut tipis yang menyelimuti desa membuat suasana
                makin damai dan sejuk. Desa ini juga merupakan pintu masuk untuk menuju ke Gunung Bromo melalui Poncokusumo.
            </p>
            <img src="https://phinemo.com/wp-content/uploads/2018/04/16908634_786468528168232_4858256345679265792_n-768x768.jpg"
                class="w-100" alt="" srcset="">
            <p>Desa Ngadas Malang juga menjadi contoh bagaimana perbedaan tetap bisa menghadirkan persatuan. Masyarakat desa
                ini menganut agama yang berbeda, ada yang Islam, Buddha hingga Hindu. Bahkan ada juga yang dalam satu
                keluarga yang memeluk tiga agama berbeda, namun tetap bisa hidup rukun. Masyarakat Ngadas juga masih
                mempraktikkan ritual dan upacara kuno yang diyakini membawa mereka pada keteraturan, nasib baik dan
                kemakmuran.
            <p>Wisatawan yang datang ke sini dijamin tak akan menyesal. Pemandangan alam yang sungguh indah, udara yang
                sejuk, suasana pedesaan yang tenang, spot foto yang melimpah, warga yang ramah, budaya yang masih lekat
                adalah sebagian hal yang akan dirasakan.

                Desa Ngadas Malang ini terletak di Kecamatan Poncokusumo dan terletak di ujung paling timur Kabupaten
                Malang, berbatasan langsung dengan wilayah Kabupaten Lumajang, Jawa Timur.</p>
            <img src="https://phinemo.com/wp-content/uploads/2018/04/11351971_1416078528716234_224894956_n.jpg"
                class="w-100" alt="" srcset="">
            </p>
        </div>
        <a href="#" class="button goTop show">
            <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline"></ion-icon>
        </a>

    </div>
    <!-- * App Capsule -->
@endsection
