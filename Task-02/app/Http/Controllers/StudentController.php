<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function showAllStudents() 
    { 
        $students=Student::all();
        return view('studentsList',compact('students'));

    }
    
}
