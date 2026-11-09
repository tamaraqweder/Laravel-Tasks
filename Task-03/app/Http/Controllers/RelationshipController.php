<?php

namespace App\Http\Controllers;

use App\Models\StudentProfile;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;

class RelationshipController extends Controller
{
    public function showCourse()
    {
        $courses=Course::with('enrolledStudents')->get();
        return view('courseList',compact('courses'));


    }

    public function showStudents(){
        $students=Student::with('course','personalProfile')->get();
        return view('studentList',compact('students'));


    }

    public function showProfiles(){
        $profile=StudentProfile::with('student')->get();
        return view('profileList',compact('profile'));
    }


}
