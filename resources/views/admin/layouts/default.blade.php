<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

    <meta charset="utf-8" />
    <title>
        @section('title')
            | {{ config('app.name') }}
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta content="" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN PLUGIN CSS -->

    <link href="{{ url('admin_assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet"

        type="text/css" />

    <link href="{{ url('admin_assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('admin_assets/plugins/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet"

        type="text/css" />

    <link rel="stylesheet" href="{{ url('admin_assets/plugins/jquery-ricksaw-chart/css/rickshaw.css') }}"

        type="text/css" media="screen">

    <link rel="stylesheet" href="{{ url('admin_assets/plugins/jquery-morris-chart/css/morris.css') }}" type="text/css"

        media="screen">

    <link href="{{ url('admin_assets/plugins/bootstrap-select2/select2.css') }}" rel="stylesheet" type="text/css"

        media="screen" />

    <link href="{{ url('admin_assets/plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"

        type="text/css" media="screen" />

    <!-- END PLUGIN CSS -->

    <!-- BEGIN PLUGIN CSS -->

    <link href="{{ url('admin_assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css"

        media="screen" />

    <link href="{{ url('admin_assets/plugins/bootstrapv3/css/bootstrap.min.css') }}" rel="stylesheet"

        type="text/css" />

    <link href="{{ url('admin_assets/plugins/bootstrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet"

        type="text/css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="{{ url('admin_assets/plugins/animate.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ url('admin_assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet"

        type="text/css" />

    <!-- END PLUGIN CSS -->

    <!-- BEGIN CORE CSS FRAMEWORK -->

    <link href="{{ url('admin_assets/webarch/css/webarch.css') }}" rel="stylesheet" type="text/css" />

    <!-- END CORE CSS FRAMEWORK -->

    <link rel="icon" type="image/png" href="../images/favico.png" sizes="32x32">
    <!-- font Awesome -->

    <!-- end of global css -->
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
    @include('admin.layouts.header');
    @include('admin.layouts.container');
    @include('admin.layouts.footer');
</body>
</html>
