<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'npm' => 'required|numeric|digits_between:8,13|unique:users,npm',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman login
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');
    }
}
