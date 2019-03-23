<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <link href="{{ asset('/css/login/login.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="text-center">
@isset($message)
    <p class="danger">{{$message}}</p>
@endisset
<form class="form-signin" name="loginform" action="/auth/login" method="post">
    {{csrf_field()}}
    <h1 class="h3 mb-3 font-weight-normal">Login Form</h1>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" value="{{old('email')}}">
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="send">Login</button>
</form>
</body>
</html>