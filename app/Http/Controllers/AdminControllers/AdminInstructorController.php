<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;

class AdminInstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::paginate(3);
        return view('Admin.UploadInstructor', ['instructors' => $instructors]);
    }
    

    public function store(Request $request)
    {
        Instructor::create([
           /* '$table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();*/

            'first_name'=>$request->fname,
            'last_name'=>$request->lname,
            'email'=>$request->email
        ]);
        return  back()->with('status','uploading instructor completed');
    }

    public function remove($email)
    {
        Instructor::where('email', $email)->delete();
        return back();
    }
}
