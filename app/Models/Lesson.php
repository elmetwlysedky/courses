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

    protected $appends = ['EndLesson'];

    public function getEndLessonAttribute(){
        $end_lesson = LessonUser::where('lesson_id', $this->id)->where('user_id',auth()->user()->id)->first();
    return $end_lesson;
    }


    public function course(){
        return $this->belongsTo(Course::class , 'course_id');
    }

    public function users(){
        return $this->belongsToMany(User::class ,'lesson_users');
    }
}
