<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function enrolledStudents(){
        return $this->hasMany(Student::class);
    }
}
