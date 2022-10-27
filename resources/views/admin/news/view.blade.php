@extends('admin.layout.master')
@section('title', $news->title)
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-8">
                <div class="card card-body mb-3">
                    <div class="row">
                        <div class="w-70">
                            <form method="POST" action=" {{ route('update_thumbnail', $news->id) }} "
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="file">Gambar Header</label>
                                    <input type="file" name="file" class="form-control" id="file" required
                                        accept="image/*">
                                </div>
                                <input type="submit" class="btn btn-success" name="header" value="Simpan">
                            </form>
                        </div>
                        <div class="w-30">
                            <img src=" {{ asset('/storage/' . $news->thumbnail) }} " class="w-100" alt=""
                                srcset="">
                        </div>
                    </div>
                </div>
                <div class="card card-body">
                    <form method="POST" action=" {{ route('update_news', $news->id) }} ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="title">Judul Berita</label>
                            <input type="text" name="title" value=" {{ $news->title }} " class="form-control"
                                id="title" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="content_data">Isi Berita
                            </label>
                            <textarea id="editor" class="form-control" name="content" required>
                                {{ $news->content }}
                            </textarea>
                        </div>
                        <input type="submit" class="btn btn-success" name="news" value="Simpan">
                    </form>
                </div>
            </div>
            <div class=" col-md-4 ">
                <div class="card">
                    <embed type="text/html" src=" {{ route('article', $news->id) }} " width="300" height="1000"
                        style="width: 100%; border-radius:10px">

                </div>

            </div>
        </div>
    </div>
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
