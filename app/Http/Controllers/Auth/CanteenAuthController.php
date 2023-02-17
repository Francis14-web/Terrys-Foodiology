<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CanteenAuthController extends Controller
{
    public function login(){
        return view('auth.canteen-login');
    }

    public function logout(){
        Auth::guard('canteen')->logout();
        return redirect()->route('canteen.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::guard('canteen')->attempt($credentials)) {
            return redirect()->intended(route('canteen.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }  
}
