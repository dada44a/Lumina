<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryUpload extends Controller
{
    public function index()
    {
        $instructors = Category::paginate(3);
        return view('Admin.UploadCategory', ['instructors' => $instructors]);
    }
    

    public function store(Request $request)
    {
        Category::create([
           /* '$table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();*/

            'title'=>$request->title,
            
        ]);
        return  back()->with('status','uploading instructor completed');
    }

    public function remove($title)
    {
        Category::where('title', $title)->delete();
        return back();
    }
}
