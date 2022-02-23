<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'interest_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function interest(){
        return $this->belongsTo(Interest::class ,'interest_id');
    }
    public function student(){
        return $this->belongsToMany(Course::class,'course_students');
    }

    public function student_lesson(){
        return $this->belongsToMany(Lesson::class,'lesson_student');
    }
    public function message(){
        return $this->belongsToMany(MessageSender::class,'message_recipients');
    }
}
