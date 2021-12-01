<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;

class StartController extends Controller
{
    public function index()
    {
        $users = User::with('books')->get(); //get - получить все записи! first - получает пурвую запись
        //$users = User::get(); //get - получить все записи! first - получает пурвую запись
        //dd($users);
        return view('index', ['users' => $users]);
    }
    public function books()
    {
        $books = Book::with('user')->get(); //get - получить все записи! first - получает пурвую запись
        dd($books);
        return view('index', ['books' => $books]);
    }
}
