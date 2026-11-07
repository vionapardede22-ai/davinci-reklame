<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect('/dashboard');
        }
        return view('admin.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek percobaan login (rate limiting manual)
        $attempts = session('login_attempts', 0);
        if ($attempts >= 5) {
            return back()->withErrors(['msg' => 'Terlalu banyak percobaan. Coba lagi nanti.']);
        }

        // Ganti dengan username & password kamu
        $adminUser = env('ADMIN_USERNAME', 'admin');
        $adminPass = env('ADMIN_PASSWORD', null);

        if (
            $request->username === $adminUser &&
            password_verify($request->password, $adminPass)
        ) {
            session(['admin_logged_in' => true]);
            session(['login_attempts' => 0]);
            return redirect('/dashboard');
        }

        session(['login_attempts' => $attempts + 1]);
        return back()->withErrors(['msg' => 'Username atau password salah!']);
    }

    // Logout
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect('/panel-dvr2026');
    }
}