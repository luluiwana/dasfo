@extends('layout.master')
@section('header')
    <!-- App Header -->
    <div class="appHeader scrolled bg-success">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>

            </a>
        </div>
        <div class="pageTitle">Sosial</div>
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
                <img src=" {{ asset('assets/img/custom/social.jpg') }} " class="card-img overlay-img" alt="image">
                <div class="card-img-overlay">
                    <h5 class="mt-5 pt-3 h3 text-white">Sosial</h5>
                </div>
            </div>
        </div>


        <div class="section mt-2">
            <div class="section mt-2">
                <div class="header-large-title p-0">
                    <h2 class="mt-3 mb-1">Demografi Desa</h2>
                    <div class="divider bg-dark  mb-3"></div>
                </div>
                <div class="listview-title p-0 mb-2">Jumlah Keseluruhan Penduduk</div>
                <table class="table table-bordered">

                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Jumlah Penduduk</th>
                            <td>1987 Orang</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <th>Jumlah Keluarga</th>
                            <td>516 Keluarga</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th>Laki-Laki</th>
                            <td>996 Orang</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <th>Wanita</th>
                            <td>991 Orang</td>

                        </tr>
                    </tbody>

                </table>

                <div class="listview-title p-0 mb-1 mt-2">Klasifikasi Berdasarkan Usia</div>
                <table class="table table-bordered">


                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Usia</th>
                            <th>Jumlah</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0-12 Bulan</td>
                            <td>59 Orang</td>
                            <td> 6%</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1-4 Tahun</td>
                            <td>144 Orang</td>
                            <td>7%</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>5-6 Tahun</td>
                            <td>111 Orang</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>7-12 Tahun</td>
                            <td>172 Orang</td>
                            <td>12%</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>13-15 Tahun</td>
                            <td>170 Orang</td>
                            <td>13%</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>16-18 Tahun</td>
                            <td>190 Orang</td>
                            <td>14%</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>19-25 Tahun</td>
                            <td>170 Orang</td>
                            <td>7%</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>25-35 Tahun</td>
                            <td>139 Orang</td>
                            <td>8%</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>36-45 Tahun</td>
                            <td>232 Orang</td>
                            <td>8%</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>46-50 Tahun</td>
                            <td>197 Orang</td>
                            <td>8% </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>51-60 Tahun</td>
                            <td>132 Orang</td>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>61-75 Tahun</td>
                            <td>103 Orang</td>
                            <td>4%</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td> >76 Tahun</td>
                            <td>15 Orang</td>
                            <td>3%</td>
                        </tr>
                    </tbody>
                </table>
                <div class="listview-title p-0 mb-1 mt-2">Klasifikasi Berdasarkan Usia</div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keterangan</th>
                            <th>Jumlah</th>
                            <th>Presentase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Buta Huruf Usia 10 tahun ke atas </td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tidak Tamat SD </td>
                            <td>79</td>
                            <td>4%</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tamat Sekolah SD </td>
                            <td>1569</td>
                            <td>79%</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tamat Sekolah SMP </td>
                            <td>284</td>
                            <td>14%</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Tamat Sekolah SMA </td>
                            <td>32</td>
                            <td>1.6%</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Tamat Sekolah PT/ Akademi </td>
                            <td>12</td>
                            <td>0.6%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="#" class="button goTop show">
                <ion-icon name="arrow-up-outline" role="img" class="md hydrated" aria-label="arrow up outline">
                </ion-icon>
            </a>

        </div>
        <!-- * App Capsule -->
    @endsection
