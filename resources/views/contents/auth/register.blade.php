@extends('layouts.auth.register')
@section('title')
    BooComme!
@endsection

@section('bookheader')
    <a href="/">
        <h2 for="book" class="col-sm-3 controle-label">BooComme!</h2>
    </a>
@endsection

@section('regist_form')
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

        <input type="password" id="inputPasswordConfirm" name="password_confirmation" class="form-control"
               placeholder="Check Password">
        <span>{{ $errors->first('password_confirmation') }}</span>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="send">Sign in</button>
    </form>
@endsection