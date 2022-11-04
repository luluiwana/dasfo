@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle">Budaya</div>
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
                    <h5 class="mt-5 pt-3 h3 text-white">Budaya</h5>
                </div>
            </div>
        </div>


        <div class="section mt-2">
            <h3>1. Karo</h3>
            <img class="w-100" src="https://desangadas.com/wp-content/uploads/2022/08/sadran3.jpg" alt=""
                srcset="">
            <p>Hari Raya Karo adalah hari raya selain Kasada yang dilaksanakan masyarakat Tengger di 28 desa kawasan Taman
                Nasional Bromo Tengger Semeru, setiap bulan Karo di kalender Tengger.</p>

            <p>Karo artinya kedua. Tiga desa yaitu Ngadisari, Wonotoro, dan Jetak melaksanakan Tari Sodoran bergantian
                setiap tahun. Hari Raya Karo bisa dibilang seperti Idul Fitrinya umat Islam. Hari Raya Karo dilaksanakan
                untuk memperingati asal-usul diciptakannya manusia oleh Tuhan yang maha esa.</p>

            <p>Dalam perayaan Karo biasanya ditampilkan tari Sodoran yaitu tari yang menggambarkan atau simbol diciptakannya
                manusia. Pemberian &#8216;Sorak&#8217; yaitu tanda yang diberikan oleh penari kepada orang lain untuk
                menjadi penari pengganti atau bergiliran dan merupakan simbol ketertarikan manusia kepada lawan jenisnya
                sebelum terjadi hubungan badan.</p>
            <h3>2. Kematian</h3>
            <p>Kematian, upacara ini diawali dengan mensucikan jasad terlebih dahulu, sebelum dimasukkan ke tanah. Kemudian
                meminta izin ke bumi yang akan ditempati jasad. Saat itu jiwa (sukma) masih dititipkan Mager Sari selama
                sukma itu belum dientaskan.</p>
            <h3>3. Gegenep</h3>
            <p>Gegenep, warga masyarakat memberikan beras 1 cibuk cangkir kepada Ki Dukun yang akan melaksanakan puasa mutih
                selama sebulan di bulan ketujuh, untuk mengasah doa (jopo montro). Dengan memberikan dana ke Ki Dukun
                tersebut diharapkan agar anak cucu selalu kecukupan sandang pangan.</p>
            <h3>4. Unan-unan</h3>
            <img class="w-100" src="https://desangadas.com/wp-content/uploads/2022/08/unan-unan.jpg" alt=""
                srcset="">
            <p>Unan-Unan adalah upacara selamatan dengan kurba kerbau, bertujuan untuk membuang semua rintangan, halangan
                (balak), juga mendoakan agar semua anak cucu rezekinya lancar, mendapatkan kemurahan sandang pangan. Upacara
                ini dilaksanakan dalam delapan tahun (sewindu) sekali pada saat 5 tahun 7 bulan dan 5 tahun 3 bulan.
                Kemudian, 6 bulan sebelum dan sesudahnya tidak boleh melaksanakan hajatan mendirikan rumah, selamatan
                entas-entas, dan menikahkan anak (temu manten)</p>
            <h3>5. Resik Pamong</h3>
            <p>Resik Pamong merupakan kegiatan yang bertujuan untuk mengenalkan seluruh perangkat desa (pamong) ke kelurahan
                Desa Ngadas. Selain itu, kegiatan ini dilakukan untuk membersihkan badan halusnya untuk melaksanakan
                pekerjaan jadi pamong atau Ki Dukun dan semua bawahannya, supaya dalam melaksanakan pekerjaannya dapat
                lestari.</p>
            <h3>6. Mayu</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/mayu.jpg" alt="" class="w-100">
            <p>Mayu, bertujuan untuk mengenalkan kepala desa (petinggi) baru ke kelurahan. Upacara ini diadakan dengan
                menggunakan sarana sapi merah (lembu abrit) dan menggigit dagingnya sendiri. Merah berarti tegas dan
                menggigit dagingnya sendiri bermakna supaya tidak membuat sakit warga masyarakat yang dipimpin. Bila membuat
                sakit warga masyarakat sama dengan membuat sakit dirinya sendiri.</p>
            <h3>7. Barikan</h3>
            <p>Merupakan hajatan yang diadakan untuk menambak atau menolak gempa atau gerhana. Namun, kegiatan ini hanya
                dilaksanakan jika selama seminggu setelah kejadian gempa atau gerhana pertama, terdapat kejadian yang sama.
                Jika tidak ada gempa atau gerhana hingga setelah seminggu, maka tidak diadakan Barikan.</p>
            <h3>8. Sedekah Panggonan</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/panggoanan.webp" class="w-100" alt="">
            <p>Sedekah Panggonan merupakan tradisi yang bertujuan memberikan sedekah sari makanan yang ditujukan ke tempat
                memelihara ternak (rojokoyo), juga tempat untuk mencari sandang pangan.</p>
            <h3>9. Sedekah Rowan</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/sedekah-rowan-1024x519.jpg" class="w-100"
                alt="">
            <p>Sedekah Rowan merupakan tradisi yang bertujuan menyelamati rumah, pekarangan, beserta isi dan sekitarnya,
                juga memberikan persembahan kepada Penjaga Air (Danyang Banyu).</p>
            <h3>10. Galungan</h3>
            <p>Galungan, bertujuan menyelamati pusaka atau keris dan warangkanya, tempat pangan (gedong pedaringan) serta
                kandang lumbungnya.</p>
            <h3>11. Entas-Entas</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/entas-entas.jpeg" class="w-100" alt="">
            <p>Entas-entas merupakan tradisi yang bertujuan men-sorgakan (nyuwargakke) semua leluhur yang telah meninggal
                menuju alam yang lebih baik.</p>
            <h3>12. Semeningga</h3>
            <p>Semeningga, bertujuan untuk meminta doa restu kepada para dewata agar acara selamatan berjalan lancar, dan
                semua sarana yang digunakan diberikan keselamatan semua.</p>
            <h3>13. Adeg Griyo</h3>
            <p>Adeg Griyo, bertujuan meberitahukan kepada bumi yang ditempati bahwa masyarakat akan mendirikan rumah.
                Sebagai bentuk untuk meminta keselamatan bagi yang bekerja, pemilik rumah dan rumahnya, serta keselamatan
                bagi semua perabot di dalam rumah dan pekarangan selama menempati rumah tersebut.</p>
            <h3>14. Wologoro</h3>
            <img class="w-100" src="https://desangadas.com/wp-content/uploads/2022/08/wologoro.jpg" alt="">
            <p>Wologoro merupakan adat yang bertujuan untuk merumahkan (nyomahke) pengantin pria dan pengantin Wanita, serta
                memberitahukan kepada penjaga air (Danyang Banyu) bahwa mereka telah menikah.</p>
            <h3>15. Sunat</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/sunat.webp" class="w-100" alt="">
            <p>Sunat, bertujuan untuk membuang kotoran (sesuker) dan rintangan atau halangan(sengkalan) anak yang disunat.
            </p>
            <h3>16. Tugel Kuncung/Gombak</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/tegel-kuncung.jpeg" class="w-100" alt="">
            <p>Tugel kuncung/Gombak merupakan tradisi yang bertujuan membersihkan ‘jadah gimbal’ yaitu kotoran yang
                dirambut, agar bayi tersebut bersih jiwa raganya dari kotoran yang terlihat maupun yang tidak terlihat.

            </p>
            <h3>17. Among-among
            </h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/among-among.jpg" class="w-100" alt="">
            <p>Among-among merupakan kegiatan dengan tujuan menyelamati (ngamongi) penjaga pertumbuhn bayi, penjaga saudara
                tuanya, serta penjaga perangkat Desa Ngadas semuanya.

            </p>
            <h3>18. Kekerek Bayi
            </h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/kekerek-bayi.jpg" class="w-100" alt=""
                srcset="">
            <p>Kekerek bayi adalah tradisi yang bertujuan membersihkan bumi tempat lahir yang tertekan darah, dan tempat
                menenam ari-ari, membersihkan bayi, ibu, dan bapaknya, serta membersihkan semua orang yang mengetahui saat
                kelahiran bayi.

            </p>
            <h3>19. Sayut</h3>
            <p>Sayut, bertujuan untuk menyelamati bayi yang masih dalam kandungan 7 bulan agar lancar dan selamat saat
                kelahirannya, bayi dan ibunya bisa selamat.

            </p>
            <h3>20. Metri</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/upacara-metri.jpeg" class="w-100" alt=""
                srcset="">
            <p>Metri merupakan tradisi yang bertujuan menyelamati dan mengetahui Sedulur 4 Kakang Kawah Adi Ari-Ari, yang
                lahir bersama kita, agar bisa mengemong dan tidak menggangu dalam kehidupan kita.

            </p>
            <h3>21. Jum'at Legi</h3>
            <p>Merupakan suatu adat yang bertujuan untuk mendatangkan dan memberikan persembahan makanan kepada semua
                leluhur. Kegiatan ini juga diadakan untuk mendoakan agar mereka mendapatkan tempat dan penghidupan yang baik
                dan bahagia.

            </p>
            <h3>22. Pujan</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/upacara-pujan.jpeg" class="w-100" alt=""
                srcset="">
            <p>Pujan merupakan tradisi yang bertujuan memuja para dewata agar memberikan keselamatan kepada yang punya
                hajat, anak cucu, para leluhurnya. Pujan ini dihantarkan oleh Ki Dukun.

            </p>
            <h3>23. Nyapu</h3>
            <p>Nyapu merupakan kegiatan yang bertujuan untuk membersihkan semua kotaran halus di desa dan balai desa, serta
                menyelamati Nas Tahun menurut perhitungan Tengger, agar selama setahun ke depan semua warga desa selalu
                selamat.

            </p>
            <h3>24. Ping Pitu</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/ping-pitu.jpg" class="w-100" alt=""
                srcset="">
            <p>Ping Pitu adalah tradisi yang diadakan dengan tujuan untuk mendatangkan leluhur (Siti Dermo). Nantinya SIti
                Dermo akan diajak untuk berkumpul selama 7 hari. Selamatan ini merupakan bentuk awalan Upacara Karo dan
                dilaksanakan pada tanggal 7 bulan Karo.

            </p>
            <h3>25. Kesada</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/upacara-kesada.jpeg" class="w-100" alt=""
                srcset="">
            <p>Kesada adalah tradisi yang bertujuan melarung atau mengirim hasil bumi (polowijo) kepada Dewata yang
                bertempat di kawah Gunung Bromo, yaitu Raden KUsumo. Upacara ini dilaksanakan tepat tanggal 14 bulan Kasodo.

            </p>
            <h3>26. Sadranan</h3>
            <img src="https://desangadas.com/wp-content/uploads/2022/08/sadranan-2.jpg" class="w-100" alt=""
                srcset="">
            <p>Sadranan merupakan bentuk selamatan terakhir pada rangkaian upacara Karo. Sebelum menjalankan Sadranan,
                masyarakat harus menjalankan selamatan Ping Pitu terlebih dahulu, dengan tujuan untuk mendatangkan SIti
                Dermo (leluhur) agar berkumpul kembali dengan keluarga selama semalam. Saat pelaksanaan kegiatan Sadranan,
                Siti Dermo akan diajak ke makam untuk makan bersama sebelum perpisahan.

            </p>
        </div>
        <a href="#" class="button goTop show">
            <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
            </ion-icon>
        </a>

    </div>
    <!-- * App Capsule -->
@endsection
