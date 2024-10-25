<?php

namespace App\Http\Controllers;

use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function view($id){
        $service = ServiceProvider::findOrFail($id);
        
    }
}
