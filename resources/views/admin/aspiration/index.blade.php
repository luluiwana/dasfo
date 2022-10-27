@extends('admin.layout.master')
@section('title', $title)
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Pengirim</th>
                            <th>Dikirim pada</th>
                            <th>Waktu</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($aspirations as $item)
                            <tr>
                                <td> {{ $loop->index + 1 }} </td>
                                <td><strong>
                                        {{ $item->name }}
                                    </strong>
                                </td>

                                <td>
                                    {{ $item->tanggal }}
                                </td>
                                <td>
                                    {{ $item->jam }} WIB
                                </td>
                                <td>
                                    @if (!$item->answer)
                                        <span class="badge bg-label-danger me-1">Belum Dibalas</span>
                                    @else
                                        <span class="badge bg-label-success me-1">Dibalas</span>
                                    @endif
                                </td>

                                <td>
                                    <a href=" {{ route('read', $item->id) }} " class="btn btn-outline-success text-dark">
                                        <i class='bx bxs-envelope'></i> Baca Pesan
                                    </a>


                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
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
