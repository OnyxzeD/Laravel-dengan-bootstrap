<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!! asset ('bower_components/bootstrap/dist/css/bootstrap.min.css')!!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!! asset ('bower_components/metisMenu/dist/metisMenu.min.css"')!!}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{!! asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{!! asset('bower_components/datatables-responsive/css/dataTables.responsive.css') !!}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{!! asset ('dist/css/timeline.css')!!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset ('dist/css/sb-admin-2.css')!!}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{!! asset ('bower_components/morrisjs/morris.css')!!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{!! asset('bower_components/font-awesome/css/font-awesome.min.css') !!}" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=?"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <!-- /.navbar-header -->
        @include('includes.header')
                <!-- /.navbar-top-links -->

        <!-- ASSIDE -->
        @include('partials.asside')
                <!-- /ASSIDE -->
    </nav>

    <!-- CONTENT-->
    <div id="page-wrapper">
        @yield('content')
    </div>

    <!-- /CONTENT -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{!! asset('bower_components/metisMenu/dist/metisMenu.min.js') !!}"></script>

<!-- Morris Charts JavaScript -->
{{--<script src="{!! asset('bower_components/raphael/raphael-min.js') !!}"></script>--}}
{{--<script src="{!! asset('bower_components/morrisjs/morris.min.js') !!}"></script>--}}
{{--<script src="{!! asset('js/morris-data.js') !!}"></script>--}}

<!-- DataTables JavaScript -->
<script src="{!! asset('bower_components/datatables/media/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') !!}"></script>

<!-- Custom Theme JavaScript -->
<script src="{!! asset('dist/js/sb-admin-2.js') !!}"></script>

<script>
    $(document).ready(function () {
//        $('#dataTables-example').DataTable({
//            responsive: true
//        });

//        $("#Submit").click(function () {
//            $.get('/ajax-get', function (data) {
//                console.log(data);
//            });
//        });
    });
</script>

</body>

</html>
