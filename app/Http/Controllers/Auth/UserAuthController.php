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

    public function register(){
        return view('auth.user-register');
    }

    public function forgotPassword(){
        return view('auth.user-forgot');
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

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }  
}
