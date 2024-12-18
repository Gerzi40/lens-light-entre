<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 
        'service_provider_id', 
        'package_id',
        'price', 
        'payment_type', 
        'transaction_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class, 'service_provider_id');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
