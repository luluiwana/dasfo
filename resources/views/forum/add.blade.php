@extends('layout.master')
@section('header')
    <div class="appHeader no-border">
        <div class="left">
            <a href=" {{ url()->previous() }} " class="headerButton">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline">
                </ion-icon>
            </a>
        </div>
        <div class="pageTitle">Tulis Aspirasi</div>
        <div class="right">

        </div>
    </div>
@endsection
@section('content')
    <div id="appCapsule">
        <div class="section mt-2">
            <div class="wide-block pb-1 pt-1">

                <form>

                    <ul class="listview image-listview no-line no-space flush">
                        <li>
                            <div class="item">
                                <div class="icon-box bg-dark">
                                    <ion-icon name="eye-off-outline" role="img" class="md hydrated"
                                        aria-label="repeat outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div>Kirim sebagai anonim</div>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                        <label class="custom-control-label" for="customSwitch5"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li id="input-name">
                            <div class="item">
                                <div class="icon-box bg-success">
                                    <ion-icon name="person-circle-outline" role="img" class="md hydrated"
                                        aria-label="mail outline"></ion-icon>
                                </div>
                                <div class="in">
                                    <div class="form-group basic">
                                        <div class="input-wrapper">
                                            <input type="email" class="form-control" id="email6"
                                                placeholder="Masukkan nama Anda">
                                            <i class="clear-input">
                                                <ion-icon name="close-circle" role="img" class="md hydrated"
                                                    aria-label="close circle"></ion-icon>
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>

                </form>

            </div>
        </div>
        <div class="section mt-2">
            <div id="editor"></div>
            <a href=" {{ route('forum') }} " class="btn btn-primary mr-1 mb-1 rounded mt-2">
                <ion-icon name="send-outline" role="img" class="md hydrated" aria-label="mail outline">
                </ion-icon>
                Kirim
            </a>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                placeholder: 'Tulis aspirasi Anda...',
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(function() {
            $("#customSwitch5").click(function() {
                $("#input-name").toggle();
            });
        });
    </script>
@endsection
@section('custom-css')
    <style>
        .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
            min-height: 300px;
        }

        .ck-rounded-corners .ck.ck-editor__main>.ck-editor__editable,
        .ck.ck-editor__main>.ck-editor__editable.ck-rounded-corners {

            min-height: 300px;
        }
    </style>
@endsection
