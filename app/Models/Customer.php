<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use Notifiable;

    protected $table = 'customers';

    protected $fillable = ['username', 'email', 'password', 'dob', 'profiSSle_picture'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'Password' => 'hashed'
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
