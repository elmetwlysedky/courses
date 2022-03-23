<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'avatar',
        'country_id',
        'is_teacher',
        'gender',
        'degree',
        'specialization',
        'employment',
        'cv',
    ];
protected $appends =['teacher_string','gender_string'];

    public function getTeacherStringAttribute(){
        $arr=['0' => 'متدرب',
            '1' => 'مدرب',
        ];
        return $arr[$this->is_teacher];
    }

    public function getGenderStringAttribute(){
        $arr=['0' => 'انثى',
            '1' => 'رجل',
        ];
        return $arr[$this->gender];
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comment(){
        return $this->hasMany(CommentCourse::class, 'user_id');
    }

    public function interests(){
        return $this->belongsToMany(Interest::class,'user_interests');
    }

    public function user_lessons(){
        return $this->belongsToMany(Lesson::class,'lesson_student');
    }

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }

    public function courses(){
        return $this->belongsToMany(Course::class,'course_users');
    }

    public function teacher(){
        return $this->hasMany(Course::class , 'teacher_id');
    }

    public function rate(){
        return $this->hasMany(Rate::class , 'user_id');
    }
}
