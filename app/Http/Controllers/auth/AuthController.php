<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register() {
        return view("auth.registers.register");
    }


    public function registerPost(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with("success","Register successfully");
    }

    public function login(Request $request) {
        return view("auth.logins.login");
    }


    public function loginPost(Request $request) {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/')->with('success','Login successfully');
    }
    return back()->with('error','Email or Password not correct');
    }
}
