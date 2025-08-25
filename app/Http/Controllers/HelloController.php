<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function login()
    {
        return view('hello.login');
    }

    public function post(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password], false)) {
            return redirect('/hello');
        }
        return redirect('/hello/login');
    }
}
