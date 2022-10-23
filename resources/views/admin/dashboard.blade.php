@extends('admin.layout.master')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="layout-demo-wrapper">

            <div class="layout-demo-info">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto p-4">
                                    <img src="{{ asset('assets/img/file-icons/256/005-database.png') }}" class="img-fluid"
                                        width="75" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2 py-4">
                                        <h1 class="card-title">
                                            22

                                        </h1>
                                        <hr>
                                        <p class="card-text">Total Berita</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto p-4">
                                    <img src="{{ asset('assets/img/file-icons/256/006-record.png') }}" class="img-fluid"
                                        width="75" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2 py-4">
                                        <h1 class="card-title">
                                            21
                                        </h1>
                                        <hr>
                                        <p class="card-text">Total Asprasi Rakyat</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-auto p-4">
                                    <img src="{{ asset('assets/img/file-icons/256/003-interface.png') }}" class="img-fluid"
                                        width="75" alt="">
                                </div>
                                <div class="col">
                                    <div class="card-block px-2 py-4">
                                        <h1 class="card-title">
                                            10
                                        </h1>
                                        <hr>
                                        <p class="card-text">Aspirasi Belum Direspon</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->
    </div>
@endsection
