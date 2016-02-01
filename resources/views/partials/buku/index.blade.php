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
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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

    <!-- /.row -->

    <script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script>
        $(document).ready(function () {
            $('#Create').hide();
            $('#Edit').hide();

            table = $('#dataTables-example').DataTable({
                "responsive": true,
                "processing": true,
//                "serverSide": true,

                // Load data for the table's content from an Ajax source
                ajax: {
                    url: '/data-buku',
                    dataSrc: ''
                },
                columns: [
                    {data: 'judul'},
                    {data: 'pengarang'},
                    {data: 'penerbit'},
                    {data: 'kategori'},
                    {data: 'status'}
                ]
            });
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
                    table.ajax.reload(null, false);
                    Index();
                });
            });
        });

        function Index() {
            $('#Create').hide();
            $('#Edit').hide();
            $('#Index').show();
        }

        function Create() {
            $('#Index').hide();
            $('#Edit').hide();
            $('#Create').show();
            $("input[name='judul']").val('');
            $("input[name='pengarang']").val('');
            $("input[name='penerbit']").val('');
            $("input[name='kategori']").val('');
            $("input[name='status']").val('');
            $("input[name='tahun_terbit']").val('');
            $("input[name='bahasa']").val('');
        }

        function Edit(id) {
            $('#Index').hide();
            $('#Create').hide();
            $('#Edit').hide();
            $.ajax({
                method: "Get",
                url: '/buku/' + id,
                data: {}
            })
                    .done(function (data) {
                        console.log(data.judul);
//                        var $form = $(this),
                        judul = $("input[name='judul']").val(data.judul);
                        pengarang = $("input[name='pengarang']").val(data.pengarang);
                        penerbit = $("input[name='penerbit']").val(data.penerbit);
                        kategori = $("input[name='kategori']").val(data.kategori);
                        status = $("input[name='status']").val(data.status);
                        tahun_terbit = $("input[name='tahun_terbit']").val(data.tahun_terbit);
                        bahasa = $("input[name='bahasa']").val(data.bahasa);

                        $('#Edit').show();
                    });


            $("#Form-Edit").submit(function (event) {

                event.preventDefault();
                var $form = $(this),
                        judul = $form.find("input[name='judul']").val(),
                        pengarang = $form.find("input[name='pengarang']").val(),
                        penerbit = $form.find("input[name='penerbit']").val(),
                        kategori = $form.find("input[name='kategori']").val(),
                        status = $form.find("input[name='status']").val(),
                        tahun_terbit = $form.find("input[name='tahun_terbit']").val(),
                        bahasa = $form.find("input[name='bahasa']").val();

                $.ajax({
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
                    }
                })
                        .done(function (data) {
                            window.alert(data.result.message);
                            table.ajax.reload(null, false);
                            Index();
                        });
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