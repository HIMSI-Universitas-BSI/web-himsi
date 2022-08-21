<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_authentication extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }
    public function storeLogin(Request $request)
    {
        $credential = $request->validate([
            'NIM'  => ['required', 'size:8'],
            'password' => ['required', 'min:8']
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/panitia')->with('success', 'Welcome ' . auth()->user()->full_name);
        }

        return back()->with('Gagal Login');
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect(route('login'));
    }
}
