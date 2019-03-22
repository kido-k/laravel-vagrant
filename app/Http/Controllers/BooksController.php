<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class BooksController extends Controller
{
    public function index()
    {
        $msg = '';
        return view('books',['msg'=>$msg,]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'item_name' => 'required |min:3|max:255'
            ]);
        if($validator->fails()) {
            $msg = 'エラーがあります。';
//            return redirect('/books',['msg'=>$msg,])
//                ->withErrors($validator)
//                ->withInput();
        }else{
            $msg = '正常に送信できました。';
        }

        return view('books',['msg'=>$msg,]);
    }
}
