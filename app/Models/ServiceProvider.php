<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    protected $fillable = [
        'name', 'short_description', 'category', 'requirement',
        'rating', 'email', 'whatsapp_number'
    ];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
