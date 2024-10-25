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
        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Ambil data yang diperlukan dari request dan model paket
        $package = Package::findOrFail($request->input('package_id'));

        // Simpan transaksi ke dalam database
        $transaction = new Transaction();
        $transaction->user_id = $user->id;
        $transaction->service_provider_id = $package->service_provider_id;
        $transaction->package = $package->id;
        $transaction->price = $package->price;
        $transaction->payment_type = $request->input('payment_type'); // tipe pembayaran yang dipilih
        $transaction->transaction_date = now(); // tanggal transaksi saat ini
        $transaction->save();

        return redirect()->route('paymentSuccess')->with('message', 'Transaksi berhasil disimpan.');
    }

    public function showTransaction(){
        $transaction = Transaction::all();
        return view('bookingHistory', compact('transactions'));
    }
}
