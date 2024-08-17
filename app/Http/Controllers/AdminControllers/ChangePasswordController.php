<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('Admin.ChangePassword');
    }

    public function store(Request $request)
    {
          // Validate the incoming request data
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
    ]);

    // Retrieve the currently authenticated admin
    $admin = auth('admin')->user();

    $current = Admin::where('email',$admin->email)->first();

    // Check if the provided old password matches the current password
    if (!Hash::check($request->old_password, $current->password)) {
        return back()->with('status' , 'The provided password does not match our records.');
    }

    // Update the password
    $current->password = Hash::make($request->new_password);
    $current->save();  // Save the updated password to the database

    // Return a success message
    return back()->with('status', 'Password changed successfully.');
    }
}
