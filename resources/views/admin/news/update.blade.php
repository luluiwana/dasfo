@extends('admin.layout.master')
@section('title', $news->title)
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <a href=" {{ route('all_news') }} " class="btn btn-success"><i class='bx bx-left-arrow-alt'></i> Kembali ke Berita</a>
        <div class="card mt-3">
            <div class="card-body">
                <div class="col-md-7 m-auto">
                    <img class="w-100" src=" {{ asset('storage/' . $news->thumbnail) }} " alt="" srcset="">
                    <h2 class="text-center"> {{ $news->title }} </h2>
                    <div class="">
                        {!! $news->content !!}
                    </div>
                    <embed type="text/html" src=" {{ route('article', 1) }} " width="500" height="1000">
                </div>


            </div>
        </div>
    </div>
    </div>

@endsection
