<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CourseViewController extends Controller
{
    public function index(Courses $course)
    {
        return view('courseinfo',['course'=>$course]);
        
    }

    public function store(Courses $course)
    {
        return redirect()->route('courseinfo',$course);
    }
}
