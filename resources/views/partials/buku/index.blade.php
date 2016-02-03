{{--@extends('layout.master')--}}
@section('title', 'Page Title')
@section('content')


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Buku</h1>
        </div>
    </div>
    <div id="Index">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button onclick="Create()"><i class="glyphicon glyphicon-plus-sign"></i>
                            Tambah Buku
                        </button>
                    </div>
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            @if (count($bukus) > 0)
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="data-example">
                                    {{--@foreach ($bukus as $buku)--}}
                                    {{--<tr class="">--}}
                                    {{--<td>{{ $buku->judul }}</td>--}}
                                    {{--<td>{{ $buku->pengarang }}</td>--}}
                                    {{--<td>{{ $buku->penerbit }}</td>--}}
                                    {{--<td>{{ $buku->kategori }}</td>--}}
                                    {{--<td>--}}
                                    {{--<button type="button" class="btn btn-outline btn-primary"--}}
                                    {{--onclick="location.href='/buku/{{ $buku->id }}';">Detail--}}
                                    {{--</button>--}}
                                    {{--<button type="button" class="btn btn-outline btn-info"--}}
                                    {{--onclick="Edit({{ $buku->id }})">Edit--}}
                                    {{--</button>--}}
                                    {{--<button type="button" class="btn btn-outline btn-danger"--}}
                                    {{--id="Delete" onclick="Hapus({{ $buku->id }})">--}}
                                    {{--Delete--}}
                                    {{--</button>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--@endforeach--}}
                                    </tbody>
                                </table>
                            @endif
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
                        Tambah Buku
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form id="Form-Create">
                                    <div class="form-group">
                                        <label>Judul</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="judul">
                                    </div>
                                    <div class="form-group">
                                        <label>Pengarang</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="pengarang">
                                    </div>
                                    <div class="form-group">
                                        <label>Penerbit</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="penerbit">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="kategori">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="status">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Terbit</label>
                                        <label>:</label>
                                        <input type="text" class="form-control" name="tahun_terbit">
                                    </div>
                                    <div class="form-group">
                                        <label>Bahasa</label>
                                        <label>:</label>
                                        <input type="text" name="bahasa" class="form-control">
                                    </div>
                                    <div class="form-group">

                                        <input class="btn btn-outline btn-info" type="submit" id="Submit"
                                               value="Simpan">
                                        {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
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
                        Edit Buku #
                    </div>
                    <div class="panel-body">
                        <form role="form" id="Form-Edit">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form id="Form-Edit">
                                        <input type="hidden" name="id">

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <label>:</label>
                                            <input type="text" class="form-control"
                                                   name="judul" id="judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <label>:</label>
                                            <input type="text" class="form-control"
                                                   name="pengarang" id="pengarang">
                                        </div>
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <label>:</label>
                                            <input type="text" class="form-control"
                                                   name="penerbit" id="penerbit">
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <label>:</label>
                                            <input type="text" class="form-control"
                                                   name="kategori" id="kategori">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <label>:</label>
                                            <input type="text" class="form-control"
                                                   name="status" id="status">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <label>:</label>
                                            <input type="text" class="form-control"
                                                   name="tahun_terbit" id="tahun_terbit">
                                        </div>
                                        <div class="form-group">
                                            <label>Bahasa</label>
                                            <label>:</label>
                                            <input type="text" name="bahasa" class="form-control" id="bahasa">
                                        </div>
                                        <div class="form-group">
                                            {{ csrf_field() }}
                                            {{ method_field('PUT') }}

                                            <input class="btn btn-outline btn-info" type="submit" value="Simpan">
                                            {{--onclick="location.href='/buku/{{ $data->id }}}';">Simpan--}}
                                            <button type="button" class="btn btn-outline btn-primary"
                                                    onclick="Index()">Kembali
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </form>

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
                    <h4><font face="Bernard MT"> Detail Buku </font></h4>
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

    <!-- /.row -->

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
                        judul = $form.find("input[name='judul']").val(),
                        pengarang = $form.find("input[name='pengarang']").val(),
                        penerbit = $form.find("input[name='penerbit']").val(),
                        kategori = $form.find("input[name='kategori']").val(),
                        status = $form.find("input[name='status']").val(),
                        tahun_terbit = $form.find("input[name='tahun_terbit']").val(),
                        bahasa = $form.find("input[name='bahasa']").val();

                var posting = $.post('/buku', {
                    judul: judul,
                    pengarang: pengarang,
                    penerbit: penerbit,
                    kategori: kategori,
                    status: status,
                    tahun_terbit: tahun_terbit,
                    bahasa: bahasa
                });

                // Put the results in a div
                posting.done(function (data) {
//                    console.log(data);
                    window.alert(data.result.message);
//                    table.ajax.reload(null, false);
                    Index();
                });
                return false;
            });

            // Event When Form Edit was submited
            $("#Form-Edit").submit(function (event) {
                event.preventDefault();
                var $form = $(this),
                        id = $form.find("input[name='id']").val(),
                        judul = $form.find("input[name='judul']").val(),
                        pengarang = $form.find("input[name='pengarang']").val(),
                        penerbit = $form.find("input[name='penerbit']").val(),
                        kategori = $form.find("input[name='kategori']").val(),
                        status = $form.find("input[name='status']").val(),
                        tahun_terbit = $form.find("input[name='tahun_terbit']").val(),
                        bahasa = $form.find("input[name='bahasa']").val();
//                console.log(currentRequest + ' |' + id);
                currentRequest = $.ajax({
                    method: "PUT",
                    url: '/buku/' + id,
                    data: {
                        judul: judul,
                        pengarang: pengarang,
                        penerbit: penerbit,
                        kategori: kategori,
                        status: status,
                        tahun_terbit: tahun_terbit,
                        bahasa: bahasa
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

//            $('#dataTables-example').DataTable({
//                "responsive": true,
//                "processing": true,
////                "ajax": getAjax()
////                "serverSide": true,
//
//                // Load data for the table's content from an Ajax source
////                ajax: {
////                    url: '/data-buku',
////                    dataSrc: ''
////                },
////                columns: [
////                    {data: 'judul'},
////                    {data: 'pengarang'},
////                    {data: 'penerbit'},
////                    {data: 'kategori'},
////                    {data: 'status'}
////                ]
//            });
        });

        // Set Data On Modal Body
        function Detail(id) {
            $("#modal-body").children().remove();
            $.ajax({
                method: "GET",
                url: '/buku/' + id,
                data: {},
                beforeSend: function () {
                    $('#loader-wrapper').show();
                },
                success: function (data) {
//                    $('#loader').hide();
                    $("#loader-wrapper").hide();
                    $("#modal-body").append("<tr><td> Judul </td><td> : </td><td>" + data.judul + "</td></tr>" +
                            "<tr><td> Pengarang </td><td> : </td><td>" + data.pengarang + "</td></tr>" +
                            "<tr><td> Penerbit </td><td> : </td><td>" + data.penerbit + "</td></tr>" +
                            "<tr><td> Kategori </td><td> : </td><td>" + data.kategori + "</td></tr>" +
                            "<tr><td> Status </td><td> : </td><td>" + data.status + "</td></tr>" +
                            "<tr><td> Tahun Terbit </td><td> : </td><td>" + data.tahun_terbit + "</td></tr>" +
                            "<tr><td> Bahasa </td><td> : </td><td>" + data.bahasa + "</td></tr>"
                    );
                }
            });
//            $.getJSON("/buku/" + id, function (data) {
//                var jumlah = data.length;
////                $.each(data.slice(0, jumlah), function (i, data) {
//                $("#modal-body").append("<tr><td> Judul </td><td> : </td><td>" + data.judul + "</td></tr>" +
//                        "<tr><td> Pengarang </td><td> : </td><td>" + data.pengarang + "</td></tr>" +
//                        "<tr><td> Penerbit </td><td> : </td><td>" + data.penerbit + "</td></tr>" +
//                        "<tr><td> Kategori </td><td> : </td><td>" + data.kategori + "</td></tr>" +
//                        "<tr><td> Status </td><td> : </td><td>" + data.status + "</td></tr>" +
//                        "<tr><td> Tahun Terbit </td><td> : </td><td>" + data.tahun_terbit + "</td></tr>" +
//                        "<tr><td> Bahasa </td><td> : </td><td>" + data.bahasa + "</td></tr>"
//                );
////                })
//            });
        }

        function getAjax() {
            $("#data-example").children().remove();
            $.getJSON("/data-buku", function (data) {
                var jumlah = data.length;
                $.each(data.slice(0, jumlah), function (i, data) {
                    $("#data-example").append("<tr><td>" + data.judul + "</td><td>" + data.pengarang + "</td><td>" + data.penerbit + "</td><td>" + data.kategori + "</td><td>" + data.status + "</td><td><button type='button' class='btn btn-outline btn-info' data-toggle='modal' data-target='#myModal' onclick='Detail(" + data.id + ")'>Detail</button> <button type='button' class='btn btn-outline btn-primary' onclick='Edit(" + data.id + ")'>Edit</button> <button type='button' class='btn btn-outline btn-danger' onclick='Hapus(" + data.id + ")'>Delete</button></td></tr>");
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
                url: '/buku/' + id,
                data: {}
            })
                    .done(function (data) {
                        console.log(data.id);
//                        var $form = $(this),
                        $("input[name='id']").val(data.id);
                        $("input[name='judul']").val(data.judul);
                        $("input[name='pengarang']").val(data.pengarang);
                        $("input[name='penerbit']").val(data.penerbit);
                        $("input[name='kategori']").val(data.kategori);
                        $("input[name='status']").val(data.status);
                        $("input[name='tahun_terbit']").val(data.tahun_terbit);
                        $("input[name='bahasa']").val(data.bahasa);
                        $('#Edit').show();
                    });
        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin ingin Menghapus ?");
            if (result) {
                $.ajax({
                    method: "DELETE",
                    url: '/buku/' + id,
                    data: {}
                })
                        .done(function (data) {
                            window.alert(data.result.message);
                            table.ajax.reload(null, false);
                            Index();
                        });
            }

        }
    </script>

@endsection