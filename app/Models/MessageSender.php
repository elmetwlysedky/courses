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

    public function user(){
        return $this->belongsTo(Teacher::class ,'teacher_id');
    }
    public function student(){
        return $this->belongsToMany(Student::class,'message_recipients');
    }
}
