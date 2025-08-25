<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HelloController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('hello.index', [
                'user' => $user
            ]);
        }
        return view('hello.login');
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
        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect('/hello');
            } else {
                return redirect('/hello/login');
            }
        } else {
            return redirect('/hello/login');
        }
    }
}
