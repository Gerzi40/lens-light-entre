<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('Authentication.register');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'username' => 'required|unique:customers,username',
        //     'email' => 'required|email|unique:customers,email',
        //     'password' => 'required|confirmed|min:8',
        //     'dob' => 'required|date',
        // ]);

        $customer = Customer::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'dob' => $request->dob,
        ]);
        
        if($customer->save()){
            return redirect()->route('home')->with("susccess", "User created successfully"); 
        }

        // Auth::login($customer);
        return redirect(route('register'))->with('error', 'Failed to create account');
        
    }
}
