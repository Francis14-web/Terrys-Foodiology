<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(){
        return view('auth.admin-login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email'));
    }    
}
 