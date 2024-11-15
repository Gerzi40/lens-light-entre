<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Admin extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username', 
        'email', 
        'password', 
    ];

    public function serviceProvider(){
        return $this->hasOne(ServiceProvider::class);
    }
    public function chatrooms(){
        return $this->hasMany(ChatRoom::class);
    }
}
