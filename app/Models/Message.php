<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false; // We only use created_at

    protected $fillable = ['sender_name', 'sender_email', 'message_content', 'created_at'];
}
