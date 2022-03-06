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
        'cv',
        'user_id',
    ];



    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function message(){
        return $this->hasMany(MessageSender::class,'teacher_id');
    }
    public function courses(){
        return $this->hasMany(Course::class,'teacher_id');
    }
}
