<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseAssoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id' , 'student_id'
    ];


    protected $with = [
        'student', 'course'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
