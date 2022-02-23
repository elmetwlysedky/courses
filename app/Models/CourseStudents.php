<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudents extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'course_id',
        'active',
        'finish',
        'certificate',
    ];


}
