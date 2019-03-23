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
        return view('/contents/book/books', [
            'msg' => $msg,
            'books' => $books,
        ]);
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required |min:3|max:255',
            'author' => 'required |min:1|max:6',
            'publisher' => 'required |max:6',
            'image' => 'required',
            'category' => 'required',
            'value' => 'required',
            'release_date' => 'required',
        ];
        $messages = [
            'name.required' => '本の名前を入力してください',
            'name.min' => '３文字以上で入力ください',
            'author.required' => '著者を入力してください',
            'publisher.required' => '出版社を入力してください',
            'image.required' => '画像のURLを入力してください',
            'category.required' => 'カテゴリーを入力してください',
            'value.required' => '定価を入力してください',
            'release_date.required' => '発売日を入力してください',
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
        $books->name = $request->name;
        $books->author = $request->author;
        $books->publisher = $request->publisher;
        $books->image = $request->image;
        $books->category = $request->category;
        $books->value = $request->value;
        $books->release_date = $request->release_date;
        $books->save();
    }
}
