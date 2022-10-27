@extends('admin.layout.master')
@section('title', $subtitle)
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <a href=" {{ route('create_news') }} " class="btn btn-success"><i class='bx bx-news'></i> Buat Berita</a>

        <div class="card  mt-3">
            <div class="card-body">
                <div class="input-group input-group-merge w-30">
                    <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()"
                        placeholder="Cari judul berita..." aria-label="Search..." aria-describedby="basic-addon-search31">
                </div>
                <table class="table table-hover mt-5" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul Berita</th>
                            <th>Tanggal Buat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($news as $item)
                            <tr>
                                <td>
                                    {{ $loop->index + 1 }}
                                </td>
                                <td class="text-break">
                                    {{ $item->title }}
                                </td>
                                <td>
                                    {{ $item->tanggal }} </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <a href=" {{ route('view', $item->id) }} " class="btn btn-outline-success text-dark"
                                            data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                            data-bs-html="true" title=""
                                            data-bs-original-title="<i class='bx bx-info-circle'></i> <span>Lihat dan Edit Berita</span>">
                                            <i class='bx bxs-pencil'></i>
                                        </a>

                                        <button type="button" class="btn btn-outline-success text-dark"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<i class='bx bx-info-circle'></i> <span>Hapus Berita</span>"
                                            data-bs-toggle="modal" data-bs-target="#Modal{{ $item->id }}">
                                            <i class='bx bxs-trash-alt'></i>
                                        </button>
                                        <!-- Small Modal -->
                                        <div class="modal fade" id="Modal{{ $item->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">Hapus Berita?</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $item->title }}
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-secondary"
                                                            data-bs-dismiss="modal">
                                                            Batal
                                                        </button>
                                                        <a type="button" href=" {{ route('delete_news', $item->id) }} "
                                                            class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('custom-js')
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
