<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['transaction_id', 'service_provider_id', 'status', 'rating'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
}
