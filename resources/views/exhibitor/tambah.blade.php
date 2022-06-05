@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assetadmin/') }}/assetsimditor/styles/simditor.css" />
@endsection
@extends('admin.index2')

@section('page')
    <a href="{{ route('produk') }}" style="color: white">Produk</a> / Tambah Produk
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tentang Team</h6>
                    <hr>
                </div>
                <form action="" class="row g-3 p-3" method="post">
                    @csrf
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Nama Team</label>
                        <input type="email" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Nama Ketua dan NIM</label>
                        <input type="text" name="namaketua" class="form-control" id="inputPassword4" required>
                        <p style="font-size: 13px">Contoh : abcdefgh(E41200300)</p>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Email Ketua</label>
                        <input type="email" name="email" class="form-control" id="inputPassword4" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">No HP (WA) Ketua</label>
                        <input type="text" name="nohp" class="form-control" id="inputPassword4" required maxlength="13"
                            onkeypress="return hanyaAngka(event)">
                        <p style="font-size: 13px">Contoh : 081234567890</p>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Semester</label>
                        <select class="form-select" name="semester" aria-label="Default select example">
                            <option selected>Pilih Semester</option>
                            <option value="1">2</option>
                            <option value="2">4</option>
                            <option value="3">6</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Anggota Team</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="anggota" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" required></textarea>
                        </div>
                        <p style="font-size: 13px">Contoh : Anggota1(E41200300),Anggota2(E41200400)<br>Pisahkan
                            anggota 1, 2 dst dengan tanda koma(,)</p>
                        <p style="font-size: 13px"></p>
                    </div>

                    <h6>Tentang Produk</h6>
                    <hr>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Nama Produk</label>
                        <input type="text" name="namaproduk" class="form-control" id="inputPassword4" required>

                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Kategori Produk</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Desktop</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Website</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Mobile</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Alat</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Link Produk Desktop</label>
                        <input type="text" name="linkdesktop" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Link Produk Website</label>
                        <input type="text" name="linkwebsite" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Link Produk Mobile</label>
                        <input type="text" name="linkmobile" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Link Produk Alat</label>
                        <input type="text" name="linkalat" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <br>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Link Poster Instagram</label>
                        <input type="text" name="linkposter" class="form-control" id="inputPassword4" required>

                        <img src="{{ asset('assetadmin') }}/img/thumbnail.png" alt="..." class="img-thumbnail mt-2"
                            width="50%">
                        {{-- <iframe width="320" height="440" src="http://instagram.com/p/qbq6fIJMVZ/embed"
                            frameborder="0"></iframe> --}}
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Link Demo Produk (Youtube)</label>
                        <input type="text" name="linkyt" class="form-control" id="inputPassword4" required>
                        <img src="{{ asset('assetadmin') }}/img/thumbnail.png" alt="..." class="img-thumbnail mt-2"
                            width="50%">
                    </div>
                    <div class="col-md-4">
                        <label for="formFile" class="form-label">Gambar Poster</label>
                        <input class="form-control" name="gambarposter" type="file" id="file-input-poster"
                            accept="image/*" onchange="showPreviewposter(event);" required>
                        <img src=" {{ asset('assetadmin') }}/img/thumbnail.png" id="file-preview-poster" alt="..."
                            class="img-thumbnail mt-2" width="70%">
                    </div>
                    <div class="col-md-4">
                        <label for="formFile" class="form-label">Gambar Utama</label>
                        <input class="form-control" name="gambarutama" type="file" id="file-input-utama" accept="image/*"
                            onchange="showPreviewutama(event);" required>
                        <div class="preview">
                            <img id="file-preview-utama" src="{{ asset('assetadmin') }}/img/thumbnail.png" alt="..."
                                class="img-thumbnail mt-2" width="70%">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="formFile" class="form-label">Gambar 1</label>
                        <input class="form-control" name="gambar1" type="file" id="file-input-1" accept="image/*"
                            onchange="showPreview1(event);" required>
                        <img id="file-preview-1" src="{{ asset('assetadmin') }}/img/thumbnail.png" alt="..."
                            class="img-thumbnail mt-2" width="70%">
                    </div>
                    <div class="col-md-4">
                        <label for="formFile" class="form-label">Gambar 2</label>
                        <input class="form-control" name="gambar2" type="file" id="file-input-2" accept="image/*"
                            onchange="showPreview2(event);" required>
                        <img id="file-preview-2" src="{{ asset('assetadmin') }}/img/thumbnail.png" alt="..."
                            class="img-thumbnail mt-2" width="70%">
                    </div>
                    <div class="col-md-4">
                        <label for="formFile" class="form-label">Gambar 3</label>
                        <input class="form-control" name="gambar3" type="file" id="file-input-3" accept="image/*"
                            onchange="showPreview3(event);" required>
                        <img id="file-preview-3" src="{{ asset('assetadmin') }}/img/thumbnail.png" alt="..."
                            class="img-thumbnail mt-2" width="70%">
                    </div>
                    <div class="col-md-12">
                        <label for="inputPassword4" class="form-label">Deskripsi Produk</label>
                        <div class="form-floating">
                            <textarea name="deskripsi" id="editor" required></textarea>
                        </div>
                    </div>
                    <div class="col card-header text-right">
                        <button type="button" class="btn btn-primary plus ml-5" data-bs-toggle="modal"
                            data-bs-target="#pemasukanModal" style="float:right; ">
                            <i class="fa fa-save"></i>
                            Simpan
                        </button>
                        <a href="{{ route('produk') }}" type="button" class="btn btn-danger plus"
                            style="float: right;margin-right:10px"><i class="fa fa-arrow-left"></i>
                            Kembali
                        </a>
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('assetadmin/') }}/assetsimditor/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assetadmin/') }}/assetsimditor/scripts/module.js"></script>
    <script type="text/javascript" src="{{ asset('assetadmin/') }}/assetsimditor/scripts/hotkeys.js"></script>
    <script type="text/javascript" src="{{ asset('assetadmin/') }}/assetsimditor/scripts/uploader.js"></script>
    <script type="text/javascript" src="{{ asset('assetadmin/') }}/assetsimditor/lib/simditor.js"></script>
    <script>
        Simditor.locale = 'en-US';
        var editor = new Simditor({
            textarea: $('#editor'),
            defaultImage: '{{ asset('assetadmin/img/thumbnail.png') }}'
            //optional options
        });

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
            return true;
        }

        function showPreviewposter(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview-poster");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        function showPreviewutama(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview-utama");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        function showPreview1(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview-1");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        function showPreview2(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview-2");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        function showPreview3(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-preview-3");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
