<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['username', 'email', 'password', 'dob', 'profile_picture'];

    protected $hidden = ['password'];
}
