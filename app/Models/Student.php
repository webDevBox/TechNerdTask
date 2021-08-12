<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name' , 'last_name'
    ];

    public function courses()
    {
        return $this->hasMany(CourseAssoc::class);
    }

    public function getNameAttribute()
    {
        return $this->first_name .' '. $this->last_name;
    }

}
