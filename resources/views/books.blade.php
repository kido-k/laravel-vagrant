@extends('layouts.app')
@section('title')
    トップリスト
@endsection

@section('booktitle')
    <h2 for="book" class="col-sm-3 controle-label">Book</h2>
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
            <form action="{{url('books')}}" method="POST" class="form-horizontal" style="margin:0 1% 0 1%;">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="item_name">名称</label>
                    <input type="text" class="form-control" id="item-name" name="item_name" placeholder="名称を入力してください">
                </div>
                <div class="form-group">
                    <label for="item_number">数量</label>
                    <input type="text" class="form-control" id="item-number" name="item_number" placeholder="在庫数を入力してください">
                </div>
                <div class="form-group">
                    <label for="item_amount">価格</label>
                    <input type="text" class="form-control" id="item-amount" name="item_amount" placeholder="価格を入力してください">
                </div>
                <div class="form-group">
                    <label for="published">発売日</label>
                    <input type="date" id="published" name="published">
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
                    </thead>
                    <!-- テーブル本体 -->
                    <th>名称</th>
                    <th>在庫数</th>
                    <th>価格</th>
                    <th>発売日</th>
                    <th></th>
                    <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="table-text">
                                <div>
                                    {{$book->item_name}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {{$book->item_number}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {{$book->item_amount}}
                                </div>
                            </td>
                            <td class="table-text">
                                <div>
                                    {{$book->published}}
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