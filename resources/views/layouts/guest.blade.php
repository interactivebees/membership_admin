<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        {{-- <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) --> --}}
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" media="all">
        <link rel="preconnect" href="https://fonts.googleapis.com" media="all">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin media="all">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://wowjs.uk/css/libs/animate.css" media="all">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" media="all"/ >
        <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" media="all"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"  media="all"/>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" media="all"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" media="all">
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/main.css')}}" media="all"/>
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/responsive.css')}}" media="all"/>
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/infection.css')}}" media="all"/>
        <script src="https://code.jquery.com/jquery-3.6.1.slim.min.js"></script>
        <link rel="icon" type="image/x-icon" href="{{url('images/fav-icon.png')}}">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" media="all">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" media="all"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" media="all">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css" media="all">
        <link rel="stylesheet" href="{{url('css/new-style.css')}}" media="all"/>
        <link rel="stylesheet" href="{{url('css/new-res.css')}}" media="all"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body class="font-sans text-gray-900 antialiased sidebar-dashboard side-active">
        @extends('layouts.header')
        @yield('content')
        @extends('layouts.footer')
        @extends('layouts.script_js')
    </body>
</html>
