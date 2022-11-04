@extends('admin.layout.master')
@section('title', $title)
@section('subtitle', $subtitle . ' Desa')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">

        <a href=" {{ route('store_agenda') }} " class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add"><i
                class='bx bx-news'></i> Buat Agenda</a>
        <!-- Small Modal -->
        <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Buat Agenda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action=" {{ route('store_agenda') }} ">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Nama Kegiatan</label>
                                <input type="text" name="name" class="form-control" id="title" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="file">Tanggal Pelaksanaan</label>
                                <input type="date" name="date" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="file">Mulai</label>
                                <input type="time" name="start" id="time1" value="00:00" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="file">Selesai</label>
                                <input type="time" name="end" id="time2" value="00:00" class="form-control">
                            </div>


                            <button type="submit" class="btn btn-success">Tambah Agenda</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <div class="card  mt-3">
            <div class="card-body">
                <div class="input-group input-group-merge w-30">
                    <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()"
                        placeholder="Cari agenda..." aria-label="Search..." aria-describedby="basic-addon-search31">
                </div>
                <table class="table table-hover mt-5" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Agenda</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="myTable">
                        @foreach ($agenda as $item)
                            <tr>
                                <td>
                                    {{ $loop->index + 1 }}
                                </td>
                                <td class="text-break">
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->tanggal }} </td>
                                <td>
                                    {{ $item->start }} - {{ $item->end }} WIB
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <a data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top"
                                            data-bs-html="true" title=""
                                            data-bs-original-title="<i class='bx bx-info-circle'></i> <span>Edit Agenda</span>">
                                            <button type="button" class="btn btn-outline-success text-dark"
                                                data-bs-toggle="modal" data-bs-target="#Modal{{ $item->id }}">
                                                <i class='bx bxs-pencil'></i>
                                            </button>
                                        </a>

                                        <a href=" {{ route('delete_agenda', $item->id) }} " type="button"
                                            data-bs-toggle="tooltip" class="btn btn-outline-success text-dark"
                                            data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" title=""
                                            data-bs-original-title="<i class='bx bx-info-circle'></i> <span>Hapus Agenda</span>">
                                            <i class='bx bxs-trash-alt'></i>
                                        </a>
                                        <!-- Small Modal -->
                                        <div class="modal fade" id="Modal{{ $item->id }}" tabindex="-1"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel2">Ubah Agenda</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action=" {{ route('update_agenda', $item->id) }} ">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <label class="form-label" for="title">Nama
                                                                    Kegiatan</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    id="title" required value="{{ $item->name }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="file">Tanggal
                                                                    Pelaksanaan</label>
                                                                <input type="date" name="date" id=""
                                                                    class="form-control" value="{{ $item->date }}">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="file">Mulai</label>
                                                                <input type="time" name="start" id="time1"
                                                                    value="{{ $item->start }}" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="file">Selesai</label>
                                                                <input type="time" name="end" id="time2"
                                                                    value="{{ $item->end }}" class="form-control">
                                                            </div>


                                                            <button type="submit" class="btn btn-success">Ubah
                                                                Agenda</button>
                                                        </form>
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
