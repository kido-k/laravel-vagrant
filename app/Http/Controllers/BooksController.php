<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Entity\Book;

class BooksController extends Controller
{
    public function index()
    {
        $msg = '';
        $books = Book::orderBy('created_at', 'asc')->get();
        return view('books', [
            'msg' => $msg,
            'books' => $books,
        ]);
    }

    public function post(Request $request)
    {
        $rules = [
            'item_name' => 'required',
        ];
        $messages = [
            'item_name.required' => '本の名前は必ず入力してください'
        ];
        $validator = Validator::make($request->all(), $rules, $messages,
            [
                'item_name' => 'required |min:3|max:255'
            ]);
        if ($validator->fails()) {
            $msg = 'エラーがあります。';
//            return redirect('/books',['msg'=>$msg,])
//                ->withErrors($validator)
//                ->withInput();
        } else {
            $this->registBook($request);
            $msg = '正常に登録できました。';
        }

        return view('books', ['msg' => $msg,]);
    }

    private function registBook(Request $request)
    {
        $books = new Book;
        $books->item_name = $request->item_name;
        $books->item_number = '1';
        $books->item_amount = '1000';
        $books->published = '2019-03-07 00:00:00';
        $books->save();
    }
}
