<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(){
        return view('auth.user-login');
    }

    public function logout(){
        Auth::guard('user')->logout();
        return redirect()->route('user.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->intended(route('user.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email'));
    }  
}
