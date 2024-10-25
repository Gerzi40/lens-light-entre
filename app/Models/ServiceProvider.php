<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $table = 'service_providers';
    protected $fillable = [
        'name', 'short_description', 'category', 'start_from',
        'rating', 'email', 'whatsapp_number', 'link_porto', 'link_photo'
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
