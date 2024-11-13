<?php

namespace App\Http\Controllers;

use App\Models\Package;
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

}
