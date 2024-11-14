<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    
    public function updateUser(Request $request){
        $user = Auth::user(); 

        $request->validate([
            'username' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        $user->username = $request->input('username');
        $user->dob = $request->input('dob');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

}
