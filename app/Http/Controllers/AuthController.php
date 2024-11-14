<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{

    public function showRegisterForm()
    {
        return view('Authentication.register');
    }

    public function registerUser(Request $request){

        $request->validate([
            'username' => 'required|min:3|max:50',
            'email' => 'required|regex:/^\S+@\S+\.\S+$/',
            'password' => 'required|min:8|confirmed',
            'dob' => 'required|date',
        ], [
            'username.required' => 'The username is required.',
            'username.min' => 'The username must be at least 3 characters.',
            'username.max' => 'The username may not be greater than 50 characters.',
    
            'email.required' => 'The email address is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.unique' => 'This email is already registered. Please use a different one.',
    
            'password.required' => 'A password is required.',
            'password.min' => 'The password must be at least 8 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
    
            'dob.required' => 'The date of birth is required.',
            'dob.date' => 'Please provide a valid date of birth.',
        ]);

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

        // if(Auth::attempt($credentials)){
        //     return redirect()->route('home');
        // } 

        $userData = User::where('email', '=', $credentials['email'])->first();

            if (!$userData) {
                $userData = Admin::where('email', '=', $credentials['email'])->first();

                if (!$userData || !Hash::check($credentials['password'], $userData['password']) ) {
                    return redirect()->back()->with('fail', 'Email atau password salah');
                }
                
                Auth::guard('admin')->login($userData);
                return redirect()->route('adminHome');
            } else {
                if (!Hash::check($credentials['password'], $userData['password'])) {
                    return redirect()->back()->with('fail', 'Email atau password salah');
                }

                Auth::login($userData);
                return redirect()->route('home');
            }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
