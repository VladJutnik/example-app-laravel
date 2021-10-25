<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        $users = User::get(); //get - получить все записи! first - получает пурвую запись
        return view('index', ['users'=>$users]);
    }
}
