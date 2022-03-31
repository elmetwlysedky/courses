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



    protected $appends =['free_string','active_string'];

    public function getFreeStringAttribute(){
        $arr=['0' => 'مجاني',
            '1' => 'غير مجاني',
        ];
        return $arr[$this->free];
    }

    public function getActiveStringAttribute(){
        $arr=['0' => 'مفعل',
            '1' => 'غير مفعل',
        ];
        return $arr[$this->active];
    }


    public function teacher(){
        return $this->belongsTo(User::class , 'teacher_id');
    }

    public function lesson(){
        return $this->hasMany(Lesson::class , 'course_id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'course_users');
    }

    public function user_course(){
        return $this->hasMany(CourseUsers::class,'course_id');
    }

    public function interests(){
        return $this->belongsToMany(Interest::class,'course_interests');
    }

    public function comment(){
        return $this->hasMany(CommentCourse::class,'course_id');
    }

    public function rating(){
        return $this->hasMany(Rate::class , 'user_id');
    }

    public function test(){
        return $this->hasMany(TestCourse::class,'course_id');
    }

    public function notice(){
        return $this->hasMany(NoticeCourse::class,'course_id');
    }

}
