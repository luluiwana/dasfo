@extends('admin.layout.master')
@section('title', $subtitle)
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="layout-demo-wrapper">

            <div class="card mb-4 w-100">
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action=" {{ route('store_news') }} ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Judul Berita</label>
                            <input type="text" name="title" class="form-control" id="title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="file">Gambar Header</label>
                            <input type="file" name="file" class="form-control" id="file" required
                                accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="content_data">Isi Berita
                            </label>
                            <textarea id="editor" class="form-control" name="content" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Buat Berita</button>
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
