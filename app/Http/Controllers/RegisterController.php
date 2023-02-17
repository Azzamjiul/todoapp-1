<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // fungsi untuk menampilkan halaman register
    public function showRegisterPage () {
        return view('register');
    }

    // fungsi untuk mendaftarkan user ke database
    public function saveUserToDatabase (Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }
}
