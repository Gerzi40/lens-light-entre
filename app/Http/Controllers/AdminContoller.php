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
        $statuses = Status::all();
        return view('Admin.adminBookings', compact('transactions', 'statuses'));
    }

    public function selectStatus(Request $request, $transaction_id){
        $statusSelection = $request->query('status');
        $transaction = Transaction::findorfail($transaction_id);
        $transaction->status_id = $statusSelection;
        $transaction->save();

        // ini buat data yg ditampilin lagi
        $admin = Auth::user();
        $service = ServiceProvider::findorfail($admin->id);
        $transactions = Transaction::with('ServiceProvider', 'package')->where('service_provider_id', $service->id)->get();
        $statuses = Status::all();
        return view('Admin.adminBookings', compact('transactions', 'statuses'));
    }
    
    public function showAddPackage()
    {
        $serviceProviders = ServiceProvider::all(); 
        return view('Admin.adminAddPackage',compact('serviceProviders'));
    }

    // bikin package tambahan
    public function createNewPackage(Request $request)
    {
        $admin = Auth::user();
        $serviceProvider = $admin->serviceProvider;

        $request->validate([
            'packageName' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'revisions' => 'required|integer|min:0',
        ]);
        
        Package::create([
            'service_provider_id' => $serviceProvider->id,
            'packageName' => $request->input('packageName'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'duration' => $request->input('duration'),
            'revisions' => $request->input('revisions'),
        ]);
        
        return redirect()->route('adminHome')->with('success', 'Package added successfully!');
    }
    
    // update current package
    public function showUpdatePackage($id)
    {
        $package = Package::findOrFail($id);
        $serviceProvider = Auth::user()->serviceProvider;

        return view('admin.adminUpdatePackage', compact('package'));
    }
    public function updatePackage(Request $request, $id)
    {
        $request->validate([
            'packageName' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'duration' => 'required|string',
            'revisions' => 'required|integer|min:0',
        ]);
    
        $package = Package::findOrFail($id);

        $package->update([
            'packageName' => $request->input('packageName'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'duration' => $request->input('duration'),
            'revisions' => $request->input('revisions'),
        ]);
    
        return redirect()->route('adminHome')->with('success', 'Package updated successfully!');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('adminHome')->with('fail', 'Package deleted successfully!');
    }
}
