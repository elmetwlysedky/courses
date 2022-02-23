<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'requirement',
        'video_intro',
        'free_or_not',
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

    public function student(){
        return $this->belongsToMany(Student::class,'course_students');
    }
    public function comment(){
        return $this->hasMany(CommentCourse::class,'course_id');
    }
}
