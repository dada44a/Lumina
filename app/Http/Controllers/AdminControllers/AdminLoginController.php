<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('Admin.login');
    }
    public function store(Request $request)
    {
        if(!auth('admin')->attempt($request->only('email','password')))
        {
            return back()->with('status','Wrong Credentials');
        }
        else
        {
            return redirect()->route('admin.dashboard');
        }
    }
}
