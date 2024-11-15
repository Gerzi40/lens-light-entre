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
        $transaction->status_id = 1;
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

        // 

        // $transaction = Transaction::findOrFail($transaction_id);
        // $serviceProvider = ServiceProvider::findorfail($transaction->service_provider_id);
        
        // $currentRating = $serviceProvider->rating;

        // // pengen itung udah brp kali transaksi pernah dilakukan dengan service tersebut
        
        //  $previousRatingsCount = Transaction::where('service_provider_id', $serviceProvider->id)
        //  ->whereNotNull('rating')  
        //  ->count();

        //  $newRating = $request->input('stars');

        //  if ($previousRatingsCount > 0) {
        //     $newAverageRating = (($currentRating * $previousRatingsCount) + $newRating) / ($previousRatingsCount + 1);
        // } else {
        //     $newAverageRating = $newRating;
        // }

        // $serviceProvider->rating = $newAverageRating;
        // $serviceProvider->ratings_count = $previousRatingsCount + 1; 
        // $serviceProvider->save();

        $request->validate([
            'stars' => 'required|integer|between:1,5',
        ]);

        $input = $request->input('stars');
        $transaction = Transaction::findOrFail($transaction_id);
        $serviceProvider = ServiceProvider::findorfail($transaction->service_provider_id);
        $currentRating = $serviceProvider->rating;
        $rateCount = $serviceProvider->rate_count;

        $newRating = ($input + ($currentRating * $rateCount)) / ($rateCount + 1);
        

        // yang bakal kita save
        // rate count baru
        $serviceProvider->rate_count = $rateCount + 1; 
        // rating baru
        $serviceProvider->rating = $newRating;
        $serviceProvider->save();

        // tandain bahwa transaksi udah di rate dan jumlah ratingnya
        $transaction->rating = $input;
        $transaction->israted = 1;
        $transaction->save();



        return redirect()->route('bookingHistory')->with('success', 'Rating updated successfully!');
    }

}
