<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
        # code...
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            
            // Regenerate session baru setiap kali user login untuk menghindari Session Fixation
            $request->session()->regenerate();

            // Lakukan pengecekan menggunakan middleware dengan method intended
            // Sebelum melakukan redirect ke halaman utama
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginFailed', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalid/hapus session agar tidak bisa digunakan lagi
        $request->session()->invalidate();

        // Buat session token baru lagi untuk menghindari Session Fixation
        $request->session()->regenerateToken();

        // Redirect ke halaman home
        return redirect('/');
    }
}
