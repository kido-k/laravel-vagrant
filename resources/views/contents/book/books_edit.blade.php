@extends('layouts.book.book')
@section('title')
    BooComme!
@endsection

@section('bookheader')
    <a href="/">
        <h2 for="book" class="col-sm-3 controle-label">BooComme!</h2>
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
        <a href="/auth/login" role="button" class="btn btn-primary">
            Login
        </a>
        <a href="/auth/register" role="button" class="btn btn-primary">
            Sign Up
        </a>
    @endif
@endsection

@section('register')
    <div class="panel panel-default">
        {{--バリデーションエラーの表示に使用--}}
        @include('common.errors')
        {{--バリデーションエラーの表示に使用--}}
        <div class="panel-heading">
            登録フォーム
        </div>

        <p>{{$msg}}</p>
        {{--本の登録フォーム--}}
        <div class="panel-body">
            <form action="{{url('/books')}}" method="POST" class="form-horizontal" style="margin:0 1% 0 1%;">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">名称</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="名称を入力してください">
                </div>
                <div class="form-group">
                    <label for="item_number">著者</label>
                    <input type="text" class="form-control" id="author" name="author"
                           placeholder="著者名を入力してください">
                </div>
                <div class="form-group">
                    <label for="publisher">出版社</label>
                    <input type="text" class="form-control" id="publisher" name="publisher"
                           placeholder="出版社を入力してください">
                </div>
                <div class="form-group">
                    <label for="image">画像URL</label>
                    <input type="text" class="form-control"  id="image" name="image" placeholder="画像URLを入力してください">
                </div>
                <div class="form-group">
                    <label for="category">カテゴリ</label>
                    <input type="text" class="form-control"  id="category" name="category" placeholder="カテゴリを入力してください">
                </div>
                <div class="form-group">
                    <label for="value">価格</label>
                    <input type="text" class="form-control"  id="value" name="value" placeholder="価格を入力してください">
                </div>
                <div class="form-group">
                    <label for="image">発売日</label>
                    <input type="date" class="form-control"  id="release_date" name="release_date" >
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-plus"></i>
                    登録
                </button>
            </form>
        </div>
    </div>
@endsection

@section('booklist')
    {{--Book: 既に登録されている本のリスト--}}
    @if (count($books) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                現在の本
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- テーブルヘッダ -->
                    <thead>
                    <th>本一覧</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    </thead>
                    <!-- テーブル本体 -->
                    <th>名称</th>
                    <th>著者</th>
                    <th>出版社</th>
                    <th>画像</th>
                    <th>価格</th>
                    <th>発売日</th>
                    <th></th>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="">
                                <div>
                                    {{$book->name}}
                                    <img src="{{$book->image}}" alt="{{$book->name}}" style="max-width:200px">
                                </div>
                            </td>
                            <td class="table-text ver-cen">
                                <div>
                                    {{$book->author}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {{$book->publisher}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div style="max-width:200px;word-wrap:break-word">
                                    {{$book->image}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {{$book->value}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {{$book->release_date}}
                                </div>
                            </td>
                            <td>
                                <form action="{{url('books/del/'.$book->id)}}" method="POST">
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="glyphicon glyphicon-trash"></i>
                                        削除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection