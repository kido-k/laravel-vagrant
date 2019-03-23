<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
    <link href="{{ asset('/css/register/register.css') }}" rel="stylesheet" type="text/css">
</head>
{{--<form name="registform" action="/auth/register" method="post">--}}
    {{--{{csrf_field()}}--}}
    {{--名前：<input type="text" name="name" size="30"><br>--}}
    {{--<span>{{ $errors->first('name') }}</span>--}}
    {{--メールアドレス：<input type="text" name="email" size="30"><br>--}}
    {{--<span>{{ $errors->first('email') }}</span>--}}
    {{--パスワード：<input type="password" name="password" size="30"><br>--}}
    {{--<span>{{ $errors->first('password') }}</span>--}}
    {{--パスワード（確認）：<input type="password" name="password_confirmation" size="30"><br>--}}
    {{--<span>{{ $errors->first('password_confirmation') }}</span>--}}
    {{--<button type="submit" name="action" value="send">送信</button>--}}
{{--</form>--}}
<body class="text-center">
<form class="form-signin" name="registform" action="/auth/register" method="post">
    {{csrf_field()}}
    {{--<img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">--}}
    <h1 class="h3 mb-3 font-weight-normal">Register Form</h1>
    <input type="text" id="inputName" name="name" class="form-control" placeholder="Login Name">
    <span>{{ $errors->first('name') }}</span>

    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address">
    <span>{{ $errors->first('email') }}</span>

    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
    <span>{{ $errors->first('password') }}</span>

    <input type="password" id="inputPasswordConfirm" name="password_confirmation" class="form-control" placeholder="Check Password">
    <span>{{ $errors->first('password_confirmation') }}</span>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="send">Sign in</button>
</form>
</body>
</html>
