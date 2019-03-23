@extends('layouts.auth.login')
@section('title')
    BooComme!
@endsection

@section('bookheader')
    <a href="/">
        <h2 for="book" class="col-sm-3 controle-label">BooComme!</h2>
    </a>
@endsection


@section('loginform')
    @isset($message)
        <p class="danger">{{$message}}</p>
    @endisset
    <form class="login-form" name="loginform" action="/auth/login" method="post">
        {{csrf_field()}}
        <h1 class="h3 mb-3 font-weight-normal">Login Form</h1>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
               value="{{old('email')}}">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="action" value="send">Login</button>
    </form>
@endsection