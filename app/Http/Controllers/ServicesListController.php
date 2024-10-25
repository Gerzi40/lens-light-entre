<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class ServicesListController extends Controller
{
    public function view(){
        $lists = ServiceProvider::all();
        return view('servicesList', compact('lists'));
    }
}
