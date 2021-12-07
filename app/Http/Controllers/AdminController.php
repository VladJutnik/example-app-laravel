<?php

namespace App\Http\Controllers;

use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::get();

        return view('admin.index', ['user' => $user]);
    }
}
