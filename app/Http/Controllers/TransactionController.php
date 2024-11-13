<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\ServiceProvider;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $user = Auth::user();
        $package = Package::findOrFail($request->input('package_id'));

        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->service_provider_id = $package->service_provider_id;
        $transaction->package_id = $package->id;
        $transaction->price = $package->price;
        $transaction->payment_type = $request->payment_type; 
        $transaction->transaction_date = now();
        $transaction->save();

        return redirect()->route('bookingHistory')->with('message', 'Transaksi berhasil disimpan.');
    }

    public function showTransaction()
    {
        $user = Auth::user();

        $transactions = Transaction::with(['package', 'serviceProvider']) 
            ->where('user_id', $user->id)
            ->get();    
        // dd($transactions);
        return view('bookingHistory', compact('transactions'));
    }

    public function idAtRating($id){
        $transaction = Transaction::findorfail($id);
        //dd($transaction);
        return view('rating', compact('transaction'));
    }

    public function updateRating(Request $request, $transaction_id){
        $input = $request->stars;

        // cari current transaction untuk bisa liat serviceProvider_id
        $currentTransaction = Transaction::findorfail($transaction_id);
        dd($currentTransaction);

        // cari service provider based on transaction->service_provider_id
        $serviceProvider = ServiceProvider::findorfail($currentTransaction->service_provider_id);

        // pengen itung udah brp kali transaksi pernah dilakukan dengan service tersebut





        return redirect()->route('bookingHistory')->with('success', 'Rating updated successfully!');
    }

}
