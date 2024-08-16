<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllVideosController extends Controller
{
    public function index()
    {
        $courses = Courses::paginate(10);
        return view('Admin.allcourses',['courses'=>$courses]);
    }

    public function remove(Request $request)
    {
        Courses::where('title',$request->title)->delete();
        return back();
    }
}
