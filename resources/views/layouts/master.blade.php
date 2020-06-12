<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('page_title')</title>
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{ asset('backend/img/metis-tile.png') }}" />
    <link rel="stylesheet" href="{{ asset('backend/lib/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/lib/metismenu/metisMenu.css') }}">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <link rel="stylesheet" href="{{asset('backend/css/styles.css')}}">

</head>
    @yield('body')
</html>
