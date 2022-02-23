<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'video',
        'image',
        'description',
        'sequence',
        'course_id'
        ];

    public function course(){
        return $this->belongsTo(Course::class , 'course_id');
    }

    public function student(){
        return $this->belongsToMany(Student::class ,'lesson_students');
    }
}
