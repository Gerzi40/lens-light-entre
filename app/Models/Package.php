<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['service_provider_id', 'description', 'price', 'duration', 'revisions'];

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }
}
