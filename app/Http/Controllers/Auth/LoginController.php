<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');  // Menampilkan halaman login
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'npm' => 'required|string|exists:users,npm',
            'password' => 'required|string',
        ]);

        // Cek kredensial (misalnya menggunakan NPM dan password)
        if (Auth::attempt(['npm' => $request->npm, 'password' => $request->password])) {
            // Login berhasil
            return redirect()->intended('/dashboard')->with('success', 'Login berhasil! Selamat datang, ' . Auth::user()->name . '.');
        } else {
            // Login gagal
            return back()->withErrors([
                'npm' => 'NPM atau Password salah',
            ]);
        }
    }
}

