<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        if(!auth('web')->attempt($request->only('email','password')))
        {
            return back()->with('status','invalid credentials');
        }
        else{
            return redirect()->route('courses');
        }
    }
}
