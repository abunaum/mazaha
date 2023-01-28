<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'pages' => 'Login',
        ];
        return view('panelpage.login', $data);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('panel/dashboard');
        }
        return back()->with('error', 'Login gagal!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
