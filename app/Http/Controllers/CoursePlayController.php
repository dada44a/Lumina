<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursePlayController extends Controller
{
    public function store(Courses $course)
    {
        
        return view('course',['course'=>$course]);
    }
}
