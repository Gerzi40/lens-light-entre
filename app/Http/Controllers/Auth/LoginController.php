<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('Authentication.login');
    }

    public function login(Request $request)
    {
        // dd($request->username);

        // $credentials = $request->only([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('customer')->attempt($credentials)) {
            $request->session()->regenerate();           
            return redirect(route('home')); 
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}