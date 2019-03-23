<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <style>
        .bookheader {
            width:100%;
            height:70px;
            display: inline-block;
        }
        .loginstatus {
            float:right;
            margin:1% 3% 0 0;
        }
        .register {
            margin: 0 5% 0 5%;
            width: 90%;
        }
        .booklist {
            margin: 0 5% 0 5%;
            width: 90%;
        }
        .table-text {
            vertical-align: center;
        }
    </style>
</head>
<body>
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
</body>
</html>
