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
        $request->validate([
            'NIM'  => ['required', 'size:8'],
            'password' => ['required', 'min:8']
        ]);

        Auth::attempt(request()->only('NIM', 'password'));
        return redirect('/panitia');
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
