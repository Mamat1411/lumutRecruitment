<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login', [
            'title' => "Login Page"
        ]);
    }

    public function postLogin(Request $request)
    {
        $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request -> only('username', 'password'))) {
            return redirect('/posts');
        }

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
