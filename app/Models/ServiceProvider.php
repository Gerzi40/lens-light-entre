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

    public function package()
    {
        return $this->hasMany(Package::class);
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'sercive_provider_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}