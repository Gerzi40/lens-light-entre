<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function view($id){
        $service = ServiceProvider::findOrFail($id);
        $packages = Package::where('service_provider_id', $id)->get();
        return view('serviceDetails', compact('service', 'packages'));
        
    }
}
