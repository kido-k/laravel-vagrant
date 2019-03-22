<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        return view('books');
    }

    public function register(Request $request) {
        $validate_rule = [
            'item_name' => 'required',
        ];
        $this->validate($request, $validate_rule);
        return view('books');
    }
}
