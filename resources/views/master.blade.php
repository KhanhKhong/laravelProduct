<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('source/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('source/css/fonts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('source/css/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('source/css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('source/css/slide-muti.css')}}">
    </head>

    <body>
        <!--Header-->
        @include('layouts.header')
        <!--End Header-->
        <!--Content-->
        @yield('content')
        <!--End Content-->
        
        <!--Footer-->
        @include('layouts.footer')
        <!--End Footer-->
    </body>      

    <script type="text/javascript" src="{{asset('source/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('source/js/przoom.js')}}"></script>
    <script type="text/javascript" src="{{asset('source/js/jcarousel.js')}}"></script>

    <script type="text/javascript" src="{{asset('source/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('source/js/menubt.js')}}"></script>
    <script type="text/javascript" src="{{asset('source/js/main.js')}}"></script>

</html>