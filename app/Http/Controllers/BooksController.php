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
        return view('/books', [
            'msg' => $msg,
            'books' => $books,
        ]);
    }

    public function post(Request $request)
    {
        $rules = [
            'item_name' => 'required |min:3|max:255',
            'item_number' => 'required |min:1|max:6',
            'item_amount' => 'required |max:6',
            'published' => 'required',
        ];
        $messages = [
            'item_name.required' => '本の名前を入力してください',
            'item_name.min' => '３文字以上で入力ください',
            'item_number.required' => '在庫数を入力してください',
            'item_amount.required' => '金額を入力してください',
            'published.required' => '発売日を入力してください',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
//            $msg = 'エラーがあります。';
            return redirect('/books')
                ->withErrors($validator)
                ->withInput();
        } else {
            $this->registBook($request);
            $msg = '正常に登録できました。';
        }

        $books = Book::orderBy('created_at', 'asc')->get();

        return view('/books', [
            'msg' => $msg,
            'books' => $books,
        ]);
    }

    public function delete(Request $request, Book $book)
    {
        $log = ['id' => $request->id, 'book' => $book];
        logger($log);

        Book::find($book->id)->delete();
//        Book::find($request->id)->delete();
        return redirect('/books');
    }


    private function registBook(Request $request)
    {
        $books = new Book;
        $books->item_name = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published = $request->published;
        $books->save();
    }
}
