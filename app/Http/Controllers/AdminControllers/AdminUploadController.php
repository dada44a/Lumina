<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Support\Facades\Storage; // For Cloudinary integration

class AdminUploadController extends Controller
{
    public function index()
    {
        return view('Admin.Upload');
    }

    public function store(Request $request)
    {
        // Validate the request to ensure file and instructor exist
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'video' => 'nullable|string',
            'instructor' => 'required|email|exists:instructors,email',
        ]);

        // Handle file upload
        $file = $request->file('file');

        if ($file) {
            // Assuming storeOnCloudinary() is a method for handling Cloudinary uploads
            $cloudinaryImage = $file->storeOnCloudinary('thumbnails');
            $url = $cloudinaryImage->getSecurePath();
            $publicId = $cloudinaryImage->getPublicId();
        } else {
            // Handle the case where no file is uploaded
            return back()->withErrors(['file' => 'No file uploaded.']);
        }

        // Retrieve the instructor
        $instructor = Instructor::where('email', $request->instructor)->first();

        if (!$instructor) {
            // Handle the case where the instructor is not found
            return back()->withErrors(['instructor' => 'Instructor not found.']);
        }

        // Create the course
        Courses::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail' => $url,
            'instructor_id' => $instructor->id,
            'videoUrl' => $request->video,
        ]);

        return back()->with('status', 'Video uploaded successfully.');
    }
}
