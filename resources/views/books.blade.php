@extends('layouts.app')
@section('title')
    トップリスト
@endsection

@section('register')
    <div class="panel-body">
        {{--バリデーションエラーの表示に使用--}}
        @include('common.errors')
        {{--バリデーションエラーの表示に使用--}}

        <p>{{$msg}}</p>

        {{--本の登録フォーム--}}
        <form action="{{url('books')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}

            {{--本のタイトル--}}
            <div class="form-group">
                <label for="book" class="col-sm-3 controle-label">Book</label>

                <div class="col-sm-6">
                    <input type="text" name="item_name" id="book-name" class="form-control">
                </div>
            </div>

            {{--本の登録ボタン--}}
            <div class="form-group">
                <div class="col-sm-offset-3" col-sm-6>
                    <button type="submit" class="btn btn-default">
                        <i class="glyphicon glyphicon-plus"></i>
                        Save
                    </button>
                </div>
            </div>
        </form>
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
                    <th>数量</th>
                    <th>価格</th>
                    <th>登録日</th>
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
                                <button type="submit" class="btn btn-default">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    削除
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection