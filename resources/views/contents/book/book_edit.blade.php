@extends('layouts.book.book_edit')
@section('title')
    BooComme!
@endsection

@section('bookheader')
    <a href="/books">
        <h1>BooComme!</h1>
    </a>
@endsection

@section('loginstatus')
    @if (Auth::check())
        {{\Auth::user()->name}}さん　　
        <a href="/auth/logout" role="button" class="btn btn-primary">
            <i class="glyphicon glyphicon-plus"></i>
            Log Out
        </a>
    @else
        ゲストさん　　
        <a href="/auth/login" role="button" class="btn btn-green">
            Login
        </a>
        <a href="/auth/register" role="button" class="btn btn-green">
            Sign Up
        </a>
    @endif
@endsection

@section('edit')
    <div class="panel panel-default">
        {{--バリデーションエラーの表示に使用--}}
        @include('common.errors')
        {{--バリデーションエラーの表示に使用--}}

        <p>{{$msg}}</p>
        {{--本の登録フォーム--}}
        <div class="panel-body" style="margin:0 0 0 20px">
            <form action="{{url('books/update/'.$book->id)}}" method="POST" class="form-horizontal"
                  style="margin:0 1% 0 1%;">
                {{csrf_field()}}
                <input type="number" hidden="true" id="id" name="id" value={{$book->id}}>
                <div class="form-group">
                    <label for="name">名称</label>
                    <input type="text" class="form-control" id="name" name="name" value={{$book->name}}>
                </div>
                <div class="form-group">
                    <label for="item_number">著者</label>
                    <input type="text" class="form-control" id="author" name="author" value={{$book->author}}>
                </div>
                <div class="form-group">
                    <label for="publisher">出版社</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" value={{$book->publisher}}>
                </div>
                <div class="form-group">
                    <label for="image">画像URL</label>
                    <input type="text" class="form-control" id="image" name="image" value={{$book->image}}>
                </div>
                <div class="form-group">
                    <label for="category">カテゴリ</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{$book->category}}">
                </div>
                <div class="form-group">
                    <label for="value">価格</label>
                    <input type="text" class="form-control" id="value" name="value"
                           value={{number_format($book->value)}}>
                </div>
                <div class="form-group">
                    <label for="image">発売日</label>
                    <input type="date" class="form-control" id="release_date" name="release_date"
                           value={{$book->release_date}}>
                </div>

                <button type="submit" class="btn btn-orange btn-middle" style="margin:20px 0 0 0">
                    <i class="glyphicon glyphicon-plus"></i>
                    更新
                </button>
            </form>
        </div>
    </div>
@endsection
