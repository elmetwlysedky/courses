<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCourse extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'ask',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'num_answer',
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }
}
