@extends('admin.layout.master')
@section('title', $title)
@section('subtitle', 'Warga')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Layout Demo -->
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3">
                            <label class="form-label" for="file">Pengirim</label>
                            <div>{!! $aspiration->name !!}</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="file">Aspirasi</label>
                            <div>{!! $aspiration->aspiration !!}</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="file">Balasan</label>
                            @if ($aspiration->answer)
                                <div>{!! $aspiration->answer !!}</div>
                            @else
                                <div><span class="badge bg-label-danger me-1">Belum Dibalas</span></div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="file">Opsi</label>
                            <div>
                                <a href=" {{ route('delete_aspiration', $aspiration->id) }} "
                                    class="btn btn-danger text-white bg-danger">Hapus Apirasi</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-body">
                    <form method="POST"action=" {{ route('answer', $aspiration->id) }} ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="content_data">Balasan
                            </label>
                            <textarea id="editor" class="form-control" name="answer" required>
                                {{ $aspiration->answer }}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </form>
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
