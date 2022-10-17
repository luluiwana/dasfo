@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle">Baca Berita</div>
        <div class="right">

        </div>
    </div>
    <!-- * App Header -->
@endsection
@section('content')
    @if ($id == 1)
        <!-- App Capsule -->
        <div id="appCapsule">

            <div class="section full" style="margin-top: -4rem">
                <div class="card bg-dark text-white">
                    <img src="https://desangadas.com/wp-content/uploads/2022/08/sadran3-300x178.jpg"
                        class="card-img overlay-img" alt="image">
                    <div class="card-img-overlay">
                        {{-- <h5 class="mt-5 pt-3 h3 text-white">Judul Artikel Pengumuman atau Berita</h5> --}}
                    </div>
                </div>
            </div>
            <div class="header-large-title">
                <h1 class="h3 mt-1">Sadranan atau Nyadran, Puncak Sekaligus Penutup dari Rangkaian Upacara Hari Raya Karo
                    Suku Tengger di Desa Ngadas</h1>
                <h2 class="subtitle text-secondary">Senin, 17 oktober 2022</h2>
            </div>

            <div class="section mt-2">
                <p><strong>Malang, Jawa Timur – </strong>Sadranan atau <em>Nyadran </em>adalah selamatan terakhir pada
                    upacara Karo, sebelumnya terlebih dulu selamatan Ping Pitu bertujuan mendatangkan Siti Dermo (leluhur)
                    berkumpul kembali dengan keluarga selama semalam. Waktu Sadranan, Siti Dermo diajak Bersama ke makam
                    untuk makan Bersama ke makam untuk makan Bersama sebelum perpisahan.</p>

                <p><img loading="lazy" class="aligncenter wp-image-1938"
                        src="https://desangadas.com/wp-content/uploads/2022/08/sadran3-300x178.jpg" alt=""
                        width="349" height="207" /></p>


                <p>Tapi setelah Sadranan, Siti Dermo masih Kembali ikut keluarga untuk melihat Ujung. Saat itu, sesaji
                    Pisang Ayu tidak boleh dikemasi sebelum selesai Ujung karena masih digunakan untuk tempat jujugan oleh
                    Siti Dermo</p>

                <p>Nyadran atau berziarah ke makam leluluhur, masyarakat secara bersama memakan makanan yang dibawa. Sebelum
                    makan, terlebih dahulu digelar doa bersama untuk para leluhur. Seluruh masyarakat Suku Tengger yang
                    mengikuti ritual nyadran tersebut, mengenakan pakaian baru yang biasa dipakai saat puncak Hari Raya Karo
                    tiap tahunnya. Sementara tokoh masyarakat mengenakan pakaian serba hitam dengan kombinasi sarung yang
                    dililitkan ke tubuh serta memakai udeng khas masyarakat Suku Tengger.</p>


            </div>
            <a href="#" class="button goTop show">
                <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                </ion-icon>
            </a>

        </div>
        <!-- * App Capsule -->
    @elseif ($id == 2)
        <!-- App Capsule -->
        <div id="appCapsule">

            <div class="section full" style="margin-top: -4rem">
                <div class="card bg-dark text-white">
                    <img src="https://desangadas.com/wp-content/uploads/2022/08/sadranan-1.jpg" class="card-img overlay-img"
                        alt="image">
                    <div class="card-img-overlay">
                        {{-- <h5 class="mt-5 pt-3 h3 text-white">Judul Artikel Pengumuman atau Berita</h5> --}}
                    </div>
                </div>
            </div>
            <div class="header-large-title">
                <h1 class="h3 mt-1">Mengenal Lebih Jauh Hari Raya Karo, Serangkaian Upacara Adat yang Diselenggarakan oleh
                    Masyarakat Suku Tengger di Desa Ngadas</h1>
                <h2 class="subtitle text-secondary">Senin, 17 oktober 2022</h2>
            </div>

            <div class="section mt-2">
                <p><strong>Malang, Jawa Timur</strong> – Ribuan masyarakat Suku Tengger di Desa Ngadas, Kecamatan
                    Poncokusumo, Kabupaten Malang memperingati Hari Raya Karo dengan menggelar berbagai macam ritual seperti
                    <em>Ping Pitu</em>, <em>Sedekah Rowan</em>, <em>Sedekah Panggonan</em>, dan <em>Sadranan</em> sebagai
                    puncak sekaligus penutup dari seluruh rangkaian Upacara Hari Raya Karo.
                </p>

                <p>Upacara Hari Raya Karo bertujuan menyelamati para leluhur masing-masing, menyelamati ladang, tempat bahan
                    pangan (pedaringan), kendang, lumbung, sigiran, penjaga air (Danyang Banyu), serta memotong semua
                    kesalahan keluarga yang telah dijalani selama setahun.</p>

                <p><img loading="lazy" class="size-medium wp-image-1503 aligncenter"
                        src="https://desangadas.com/wp-content/uploads/2022/08/sadranan-1-300x200.jpg" alt=""
                        width="300" height="200" /></p>



                <p>Upacara Karo berlangsung selama 15 hari dimulai pada tanggal 7 bulan Karo (Karo dimaknai sebagai bulan
                    kedua dalam kalender Saka) dan ditutup pada tanggal 22 bulan Karo. Seminggu pertama, seluruh masyarakat
                    Suku Tengger mempersiapkan diri dengan melakukan banyak ibadah dan doa. Pada awal minggu kedua atau hari
                    kedelapan diadakan selamatan <em>Ping Pitu</em>.</p>

                <p>Sedekah Rowan, Sedekah Panggonan, dan Sadranan atau <em>Nyadran </em>juga termasuk dalam rangkaian
                    upacara memperingati Hari Raya Karo tersebut. Semua rangkaian ritual yang dilakukan memiliki maksud dan
                    tujuan masing-masing.</p>

            </div>
            <a href="#" class="button goTop show">
                <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                </ion-icon>
            </a>

        </div>
        <!-- * App Capsule -->
    @endif
@endsection
