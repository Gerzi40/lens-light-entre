<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('Authentication.register');
    }

    public function registerUser(Request $request){

        // $request->validate([
        //     'username' => 'required|min:3|max:50',
        //     'email' => 'required|regex:/^\S+@\S+\.\S+$/',
        //     'password' => 'required|min:8',
        //     'dob' => 'required|date',
        // ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->dob = $request->dob;
        if($user->save()){
            return redirect(route('login'))->with('success', 'User Created');
        }
        return redirect(route('register'))->with('fail', 'Failed create Account');
    }

    public function showLoginForm()
    {
        return view('Authentication.login');
    }

    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        } 
        
        return redirect()->back()->with('fail', 'Email atau password salah');
        

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
