<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'requirements',
        'video_intro',
        'free',
        'active',
        'description',
        'gender',
        'price',
        'image',
        'teacher_id',

    ];
    public function teacher(){
        return $this->belongsTo(Teacher::class , 'teacher_id');
    }

    public function lesson(){
        return $this->hasMany(Lesson::class , 'course_id');
    }

    public function user(){
        return $this->belongsToMany(User::class,'course_user');
    }

    public function interests(){
        return $this->belongsToMany(Interest::class,'course_interests');
    }

    public function comment(){
        return $this->hasMany(CommentCourse::class,'course_id');
    }
}
