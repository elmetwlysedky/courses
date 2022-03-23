<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageSender extends Model
{
    use HasFactory;
    protected $fillable = [
        'body',
        'teacher_id',
    ];

    public function teacher(){
        return $this->belongsTo(User::class ,'teacher_id');
    }
    public function student(){
        return $this->belongsToMany(User::class,'message_recipients');
    }
}
