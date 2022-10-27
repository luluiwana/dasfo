@extends('admin.layout.master')
@section('title', $title)
@section('subtitle', $subtitle . ' Desa')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="layout-demo-wrapper">

            <div class="card mb-4 w-100">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action=" {{ route('store_data_gov', $subtitle) }} ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="file">Gambar Header</label>
                            <input type="file" name="file" class="form-control" id="file" required
                                accept="image/*">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="file">Data Anggaran Desa</label>
                            <input type="file" name="cashflow" class="form-control" id="file" required>
                        </div>

                        <button type="submit" class="btn btn-success">Lanjut</button>
                    </form>
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->
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
@endsection
