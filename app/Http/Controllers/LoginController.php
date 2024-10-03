<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cek kredensial login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home'); // Redirect ke halaman home setelah login berhasil
        }

        // Jika login gagal, kembalikan pesan error
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }
}