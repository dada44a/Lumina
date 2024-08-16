<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Category;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
       $genres = Category::paginate(7);
       $courses = Courses::paginate(10);
        return view('courses', ['genres' => $genres,'courses'=>$courses]);
    }

}
