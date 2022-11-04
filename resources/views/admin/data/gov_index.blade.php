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
                    <a href=" {{ route('create_govdata', $subtitle) }} " class="btn btn-success"> <i class='bx bx-plus'></i>
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
                    <div class="card card-body mb-3">
                        <div class="row">
                            <div class="w-70">
                                <form action=" {{ route('update_header', 'Anggaran') }} " enctype="multipart/form-data"
                                    method="post" id="input-header">
                                    @csrf
                                    <label class="form-label" for="file">Data Anggaran Desa</label>

                                    <input type="file" name="file" class="form-control mb-2" name="file"
                                        id="file" required>
                                    <input type="submit" class="btn  btn-success mt-2" value="Simpan">

                                </form>
                            </div>
                            <div class="w-30 m-auto text-center">
                                @if ($cashflow->thumbnail)
                                    <a class="btn btn-success"
                                        href="{{ asset('storage/' . $cashflow->thumbnail) }}">Download</a>
                                @endif


                            </div>
                        </div>
                    </div>

                    <div class="card card-body mb-3">
                        <h5> Data Perangkat Desa</h5>
                        <table class="table">
                            <tr>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Opsi</th>
                            </tr>
                            @foreach ($people as $item)
                                <tr>
                                    <td>
                                        <img src=" {{ asset('/storage/' . $item->photo) }} " alt="" width="70px">
                                    </td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <a data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                                data-bs-html="true" title=""
                                                data-bs-original-title="<i class='bx bx-info-circle'></i> <span>Edit</span>">
                                                <button type="button" class="btn btn-outline-success text-dark"
                                                    data-bs-toggle="modal" data-bs-target="#Modal{{ $item->id }}">
                                                    <i class='bx bxs-pencil'></i>
                                                </button>
                                            </a>

                                            <a href=" {{ route('delete_people', $item->id) }} " type="button"
                                                class="btn btn-outline-success text-dark" data-bs-toggle="tooltip"
                                                data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                                title=""
                                                data-bs-original-title="<i class='bx bx-info-circle'></i> <span>Hapus</span>">
                                                <i class='bx bxs-trash-alt'></i>
                                            </a>
                                            <!-- Small Modal -->
                                            <div class="modal fade" id="Modal{{ $item->id }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel2">Ubah Data
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action=" {{ route('edit_people', $item->id) }} "
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <label class="form-label" for="content">Nama
                                                                    Lengkap</label>
                                                                <input type="text" name="name" id=""
                                                                    class="form-control mb-2" value="{{ $item->name }}"
                                                                    required>
                                                                <label class="form-label" for="content">Jabatan</label>

                                                                <input type="text" class="form-control mb-2"
                                                                    name="title" id="" required
                                                                    value="{{ $item->title }}">
                                                                <label class="form-label" for="content">Foto</label>

                                                                <input type="file" name="file"
                                                                    class="form-control mb-2" name="file"
                                                                    id="file">
                                                                <input type="submit" class="btn  btn-success mt-2"
                                                                    value="Simpan">

                                                            </form>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </table>


                    </div>

                    <div class="card card-body">
                        <h5>Tambah Data Perangkat Desa</h5>
                        @if ($errors->has('file'))
                            <span>{{ $errors->first('file') }}</span>
                        @endif
                        <form action=" {{ route('add_people') }} " method="post" enctype="multipart/form-data">
                            @csrf
                            <div id='list_person'>
                                <label class="form-label" for="content">Nama Lengkap</label>
                                <input type="text" name="name[]" id="" class="form-control mb-2" required>
                                <label class="form-label" for="content">Jabatan</label>

                                <input type="text" class="form-control mb-2" name="title[]" id="" required>
                                <label class="form-label" for="content">Foto</label>

                                <input type="file" name="file[]" class="form-control mb-2" name="file"
                                    id="file" required>
                                <hr>
                            </div>
                            <button id='add_person' type="button"
                                class="btn btn-success btn-md mr-3 mt-2 text-light">Tambah
                                Personil</button> <input type="submit" class="btn  btn-success mt-2" value="Simpan">

                        </form>
                    </div>
                </div>
                <div class=" col-md-4 ">
                    <div class="card">
                        <embed type="text/html" src=" {{ route('gov', $subtitle) }} " width="300" height="1000"
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

    <script>
        $('#add_person').click(function() {
            const pg = `
            <label class="form-label" for="content">Nama Lengkap</label>
                                <input type="text" name="name[]" id="" class="form-control mb-2">
                                <label class="form-label" for="content">Jabatan</label>

                                <input type="text" class="form-control mb-2" name="title[]" id="">
                                <label class="form-label" for="content">Foto</label>

                                <input type="file" name="file[]" class="form-control mb-2" name="file" id="file"
                                    required>
                                <hr>
            `;

            $('#list_person').append(pg);
        });
    </script>
@endsection
@section('custom-css')
    <link rel="stylesheet" href=" {{ asset('assets/css/ck_styles.css') }} ">
    <style>
        td {
            border: 1px solid;
            /* padding: 0.5rem; */
        }
    </style>
@endsection
