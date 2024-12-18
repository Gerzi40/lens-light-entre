<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['packageName', 'service_provider_id', 'description', 'price', 'duration', 'revisions'];

    public function serviceProvider()
    {
        return $this->belongsTo(ServiceProvider::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'package_id');
    }
}
