<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = ['message', 'senderuser'];
    public function chatroom()
    {
        return $this->belongsTo(ChatRoom::class);
    }
}
