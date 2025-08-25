<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/hello');
    }
}
