<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index(){
        $users = User::first(); //get получить все записи!
        dd($users->name);
    }
}
