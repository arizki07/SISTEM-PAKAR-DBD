<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('product.login');
    }

    public function authenticate(Request $request)
    {
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect to loading page first
            return redirect()->route('loading');
        } else {
            // If login fails, return error message
            return redirect()->back()->with('error', 'Username atau password salah. Silakan coba lagi');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
