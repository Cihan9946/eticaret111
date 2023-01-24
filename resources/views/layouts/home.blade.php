<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>
    <meta name="destricption" content="@yield('destricption')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="m.cihan">


    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('asset/css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('asset/css/slick-theme.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('asset/css/nouislider.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('asset/css/style.css')}}" />
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


</head>

<body>


<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
       @include('layouts.category')
            @include('layouts.menu')
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->
@yield('content')
@extends('layouts.header')

@extends('layouts.footer')
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/slick.min.js')}}"></script>
<script src="{{asset('asset/js/nouislider.min.js')}}"></script>
<script src="{{asset('asset/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}}"></script>
</body>
</html>
