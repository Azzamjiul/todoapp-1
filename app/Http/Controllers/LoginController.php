<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // fungsi menampilkan halaman login

    // fungsi untuk login
    public function login (Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $isSuccessLogin = Auth::attempt($data);

        if ($isSuccessLogin)  {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }

    // memproses logout
    public function logout ()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
