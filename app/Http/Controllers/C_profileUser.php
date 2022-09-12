<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class C_profileUser extends Controller
{
    public function changePass()
    {
        return view('user profile/change-password');
    }
    public function changePassAct(Request $request)
    {
        $request->validate([
            'passwordLama' => ['required'],
            'passwordBaru' => ['required', 'min:8'],
            'passwordKonfirmasi' => ['required', 'same:passwordBaru'],
        ]);
        #Match The Old Password
        if (!Hash::check($request->passwordLama, auth()->user()->password)) {
            return back()->with("failed", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->passwordBaru)
        ]);

        return back()->with("success", "Password changed successfully!");
    }
}
