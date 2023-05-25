<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function createAccount(Request $request){
        $request->validate([
            'firstname' => 'required|alpha|min:2|max:20',
            'lastname' => 'required|alpha|min:2|max:20',
            'username' => 'required|unique:users',
            'role' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'until_when' => 'nullable|date',
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username' => $request->username,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'until_when' => $request->until_when,
        ]);

        $credentials = ([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if(auth()->guard('user')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('user.dashboard');
        }
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
