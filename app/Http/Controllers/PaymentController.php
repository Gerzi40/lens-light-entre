<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function viewPrice($id) {
        $package = Package::findOrFail($id);
        return view('payment', compact('package'));
    }
}
