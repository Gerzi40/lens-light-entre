<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\Status;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class AdminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $admin = Auth::user();
        $service = ServiceProvider::findorfail($admin->id);
        $packages = Package::with('ServiceProvider')->where('service_provider_id', $service->id)->get();
        // dd($packages);
        return view('Admin.adminHome', compact('service', 'packages'));
    }

    
    // ini buat description, link porto, dan bbrp attribute yg bisa diubah
    public function updateServiceDetails(Request $request)
    {
        //
    }

    // show booking yang masuk
    public function showBooking()
    {
        $admin = Auth::user();
        $service = ServiceProvider::findorfail($admin->id);
        $transactions = Transaction::with('ServiceProvider', 'package')->where('service_provider_id', $service->id)->get();
        $status = Status::all();
        return view('Admin.adminBookings', compact('transactions', 'status'));
    }

    // update current package
    public function updatePackage(string $id)
    {
        //
    }

    // bikin package tambahan
    public function createNewPackage()
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
