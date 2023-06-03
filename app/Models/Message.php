<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'sender_type',
        'recipient_id',
        'recipient_type',
        'content',
    ];

    public function sender()
    {
        return $this->morphTo('sender');
    }

    public function recipient()
    {
        return $this->morphTo('recipient');
    }
}
