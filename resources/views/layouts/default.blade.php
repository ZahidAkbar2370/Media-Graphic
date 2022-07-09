<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend_assets/style.css') }}">
    <link rel="icon" type="image/png" href="{{ url('images/favico.png') }}" sizes="32x32">
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>
    <body class="home">
        @include('layouts.header')
        @include('layouts.container');
        @include('layouts.footer');
    </body>
</html>
