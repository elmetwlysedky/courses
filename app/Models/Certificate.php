<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'Authority',
        'price',
        'free',
        'course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }


}
