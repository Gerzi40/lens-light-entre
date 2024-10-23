<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'customer_id', 
        'service_provider_id', 
        'price', 
        'payment_type', 
        'transaction_date'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
}
