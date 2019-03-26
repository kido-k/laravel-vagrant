<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/books/books_edit.css') }}" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
<sectoin class="container">
    <div class="book-header d-flex justify-content-between">
        @yield('bookheader')
        <div class="login-status">
            @yield('loginstatus')
        </div>
    </div>
    <div class="book-input">
        @yield('edit')
    </div>
</sectoin>
</body>
</html>

