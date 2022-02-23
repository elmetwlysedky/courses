<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function teacher(){
        return $this->hasMany(Teacher::class , 'teacher_id');
    }

    public function student(){
        return $this->hasMany(Student::class , 'student_id');
    }
}
