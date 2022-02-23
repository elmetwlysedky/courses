<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected  $fillable = [
        'degree',
        'specialization',
        'employment',
        'photo',
        'interest_id',
        'user_id',
    ];

    public function interest(){
        return $this->belongsTo(Interest::class , 'interest_id');
    }

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
    public function course(){
        return $this->hasMany(Course::class,'teacher_id');
    }
    public function message(){
        return $this->hasMany(MessageSender::class,'teacher_id');
    }
}
