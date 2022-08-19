<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_authentication extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'NIM'  => ['required', 'size:8'],
            'password' => ['required', 'min:8']
        ]);
    }
}
