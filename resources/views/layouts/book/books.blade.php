<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/books/books.css') }}" rel="stylesheet" type="text/css">

    <title>@yield('title')</title>
</head>
<body>
<sectoin class="container">

    <div class="bookheader">
        @yield('bookheader')
        <div class="loginstatus">
            @yield('loginstatus')
        </div>
    </div>
    <div class="register">
        @yield('register')
    </div>
    <div class="booklist">
        @yield('booklist')
    </div>
</sectoin>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

