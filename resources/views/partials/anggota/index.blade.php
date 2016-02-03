@extends('layout.master')
@section('title', 'Page Title')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Anggota</h1>
        </div>
    </div>

    <div id="Index">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button onclick="Create()"><i class="glyphicon glyphicon-plus-sign"></i>
                            Tambah Anggota
                        </button>
                    </div>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            {{--@if (count($anggotas) > 0)--}}
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>No Telpon</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody id="data-example">
                                {{--@foreach ($anggotas as $anggota)--}}
                                {{--<tr class="">--}}
                                {{--<td>{{ $anggota->nama }}</td>--}}
                                {{--<td>{{ $anggota->alamat }}</td>--}}
                                {{--<td>{{ $anggota->kota }}</td>--}}
                                {{--<td>{{ $anggota->no_telp }}</td>--}}
                                {{--<td>--}}
                                {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                {{--onclick="location.href='/anggota/{{ $anggota->id }}';">Detail--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-outline btn-info"--}}
                                {{--onclick="location.href='/edit-anggota/{{ $anggota->id }}';">Edit--}}
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-outline btn-danger"--}}
                                {{--onclick="location.href='/hapus-anggota/{{ $anggota->id }}';">Delete--}}
                                {{--</button>--}}
                                {{--</td>--}}
                                {{--</tr>--}}
                                {{--@endforeach--}}
                                </tbody>
                            </table>
                            {{--@endif--}}
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>

    <div id="Create">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Tambah Anggota
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" id="Form-Create">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <label>:</label>
                                        <input class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <label>:</label>
                                        <input class="form-control" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <label>:</label>
                                        <input class="form-control" name="kota">
                                    </div>
                                    <div class="form-group">
                                        <label>No Telpon</label>
                                        <label>:</label>
                                        <input class="form-control" name="no_telp">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <label>:</label>
                                        <input class="form-control" type="date" name="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline btn-info"
                                                onclick="">Simpan
                                        </button>
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="Index()">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>

    <div id="Edit">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Anggota
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" id="Form-Edit">
                                    <input type="hidden" name="id">

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <label>:</label>
                                        <input class="form-control" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <label>:</label>
                                        <input class="form-control" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label>Kota</label>
                                        <label>:</label>
                                        <input class="form-control" name="kota">
                                    </div>
                                    <div class="form-group">
                                        <label>No Telpon</label>
                                        <label>:</label>
                                        <input class="form-control" name="no_telp">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <label>:</label>
                                        <input class="form-control" type="date" name="tgl_lahir">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline btn-info"
                                                onclick="">Simpan
                                        </button>
                                        <button type="button" class="btn btn-outline btn-primary"
                                                onclick="Index()">Kembali
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
        </div>
    </div>

    {{--Modal--}}

    {{--Detail Modal--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><font face="Bernard MT"> Detail Anggota </font></h4>
                </div>
                <div class="modal-body">
                    {{--<p>Some text in the modal.</p>--}}
                    <div id="loader-wrapper">
                        <div id="loader"></div>
                    </div>
                    <table class="table table-striped">
                        <tbody id="modal-body">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                </div>
            </div>

        </div>
    </div>

    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            var currentRequest = null;
            $('#Create').hide();
            $('#Edit').hide();
            getAjax();

            // Event When Form create was submited
            $("#Form-Create").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        nama = $form.find("input[name='nama']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        kota = $form.find("input[name='kota']").val(),
                        no_telp = $form.find("input[name='no_telp']").val(),
                        tgl_lahir = $form.find("input[name='tgl_lahir']").val();

                var posting = $.post('/anggota', {
                    nama: nama,
                    alamat: alamat,
                    kota: kota,
                    no_telp: no_telp,
                    tgl_lahir: tgl_lahir
                });

                // Put the results in a div
                posting.done(function (data) {
//                    console.log(data);
                    window.alert(data.result.message);
                    Index();
                });
                return false;
            });

            // Event When Form Edit was submited
            $("#Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                        nama = $form.find("input[name='nama']").val(),
                        alamat = $form.find("input[name='alamat']").val(),
                        kota = $form.find("input[name='kota']").val(),
                        no_telp = $form.find("input[name='no_telp']").val(),
                        tgl_lahir = $form.find("input[name='tgl_lahir']").val();
//                console.log(currentRequest + ' |' + id);
                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/anggota/' + id,
                    data: {
                        nama: nama,
                        alamat: alamat,
                        kota: kota,
                        no_telp: no_telp,
                        tgl_lahir: tgl_lahir
                    },
                    beforeSend: function () {
                        if (currentRequest != null) {
                            currentRequest.abort();
                        }
                    },
                    success: function (data) {
                        window.alert(data.result.message);
                        Index();
                    },
                    error: function (data) {
                        window.alert(data.result.message);
                        Index();
                    }
                });
            });
        });

        // Set Data On Modal Body
        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/anggota/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td> Nama </td><td> : </td><td>" + data.nama + "</td></tr>" +
                            "<tr><td> Alamat </td><td> : </td><td>" + data.alamat + "</td></tr>" +
                            "<tr><td> Kota </td><td> : </td><td>" + data.kota + "</td></tr>" +
                            "<tr><td> No Telpon </td><td> : </td><td>" + data.no_telp + "</td></tr>" +
                            "<tr><td> Tanggal Lahir </td><td> : </td><td>" + data.tgl_lahir + "</td></tr>" +
                            "<tr><td> Tanggal Daftar </td><td> : </td><td>" + data.tgl_daftar + "</td></tr>"
                    );
                }
            });
        }

        function getAjax() {
            $("#data-example").children().remove();
            $.getJSON("/data-anggota", function (data) {
                var jumlah = data.length;
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#data-example").append("<tr><td>" + data.nama + "</td><td>" + data.alamat + "</td><td>" + data.kota + "</td><td>" + data.no_telp + "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
                })
            });
        }

        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
            $("#data-example").children().remove();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            getAjax();
        }

        function Create() {
            $('#Index').hide();
            $('#Edit').hide();
            $('#Create').show();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
        }

        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
            document.getElementById("Form-Create").reset();
            document.getElementById("Form-Edit").reset();
            $.ajax({
                method: "Get",
                url: '/anggota/' + id,
                data: {}
            })
                    .done(function (data) {
                        console.log(data.id);
//                        var $form = $(this),
                        $("input[name='id']").val(data.id);
                        $("input[name='nama']").val(data.nama);
                        $("input[name='alamat']").val(data.alamat);
                        $("input[name='kota']").val(data.kota);
                        $("input[name='no_telp']").val(data.no_telp);
                        $("input[name='tgl_lahir']").val(data.tgl_lahir);
                        $('#Edit').show();
                    });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus ?");
            if (result) {
                $.ajax({
                    method: "DELETE",
                    url: '/anggota/' + id,
                    data: {}
                })
                        .done(function (data) {
                            window.alert(data.result.message);
                            Index();
                        });
            }

        }
    </script>
@endsection