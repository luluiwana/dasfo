@extends('admin.layout.master')
@section('title', $title)
@section('subtitle', $subtitle . ' Desa')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">

        @if ($check_data == 0)
            <div class="card">
                <div class="card-body text-center">
                    <h5>Belum ada data</h5>
                    <img class="w-30 mb-2 d-block m-auto"
                        src="{{ asset('assets_admin/img/illustrations/undraw_no_data_re_kwbl.svg') }}" alt=""
                        srcset="">
                    <a href=" {{ route('create_data', $subtitle) }} " class="btn btn-success"> <i class='bx bx-plus'></i>
                        Tambah Data
                        {{ $subtitle }}
                        Desa</a>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-body mb-3">
                        <div class="row">
                            <div class="w-70">
                                <form action=" {{ route('update_header', $subtitle) }} " enctype="multipart/form-data"
                                    method="post" id="input-header">
                                    @csrf
                                    <label class="form-label" for="file">Gambar Header</label>

                                    <input type="file" name="file" class="form-control mb-2" name="file"
                                        id="file" required accept="image/*">
                                    <input type="submit" class="btn  btn-success mt-2" value="Simpan">

                                </form>
                            </div>
                            <div class="w-30">
                                <img class="w-100" src=" {{ asset('storage/' . $village_data->thumbnail) }} "
                                    alt="" srcset="">
                            </div>
                        </div>

                    </div>
                    <div class="card card-body">
                        <form action=" {{ route('update_data', $subtitle) }} " method="post">
                            @csrf
                            <label class="form-label" for="content">Informasi {{ $subtitle }}</label>
                            <div id="input-content">
                                <textarea id="editor" class="form-control" name="content" required>
                                                    {!! $village_data->content !!}

                                                </textarea>
                                <input class="btn btn-success mt-3" type="submit" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" col-md-4 ">
                    <div class="card">
                        <embed type="text/html" src=" {{ route('info', $subtitle) }} " width="300" height="1000"
                            style="width: 100%; border-radius:10px">

                    </div>

                </div>
            </div>

            {{-- <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="w-100" src=" {{ asset('storage/' . $row->thumbnail) }} " alt=""
                                srcset="">
                        </div>
                        <div class="col-md-7 m-auto text-center">
                            <a href="javascript:void(0)" class="btn  btn-success" id="btn-input-header">
                                <i class='bx bx-image'></i> Ubah Gambar Header
                            </a>
                            <form action=" {{ route('update_header', $subtitle) }} " enctype="multipart/form-data"
                                method="post" id="input-header" style="display: none">
                                @csrf
                                <input type="file" name="file" class="form-control mb-2" name="file" id="file"
                                    required accept="image/*">
                                <input type="submit" class="btn  btn-success" value="Simpan">
                                <a href="#" class="btn  btn-secondary ms-4" id="btn-cancel-input-header">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <form action=" {{ route('update_data', $subtitle) }} " method="post">
                        @csrf
                        <div class="card-body">
                            <a id="edit-data" class="btn btn-success mb-5"><i class='bx bxs-edit-alt'></i> Edit Data
                                {{ $subtitle }}
                                Desa</a>
                            <div id="content">
                                <p class="card-text">
                                    {!! $row->content !!}
                                </p>
                            </div>

                            <div id="input-content" style="display: none">
                                <textarea id="editor" class="form-control" name="content" required>
                                                {!! $row->content !!}

                                            </textarea>
                                <input class="btn rounded-pill btn-success mt-3" type="submit" value="Simpan">
                                <a id="cancel" class="btn rounded-pill btn-secondary float-end mt-3">Batal</a>
                            </div>
                        </div>
                    </form>

                </div> --}}
        @endif

    </div>

@endsection
@section('custom-js')

    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('upload_info', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
@section('custom-css')
    <link rel="stylesheet" href=" {{ asset('assets/css/ck_styles.css') }} ">
    <style>
        td {
            border: 1px solid;
            padding: 0.5rem;
            text-align: center;
        }
    </style>
@endsection
