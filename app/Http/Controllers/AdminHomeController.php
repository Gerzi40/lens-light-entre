<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    //
    public function index(){
        $admin = Auth::user();
        $service = ServiceProvider::findorfail($admin->id);
        return view('adminHome', compact('service'));
    }
}
