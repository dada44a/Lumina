<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangeEmailController extends Controller
{
    public function index(){
        return view('Admin.ChangeEmail');
    }
    public function store(Request $request)
    {
       
        $request->validate([
            'old'=>'required|email',
            'new'=>'required|email'
        ]);

        $users = Admin::where('email',$request->old)->first();
        if($users)
        {
            $users->email= $request->new;
            $users->save();
            return back()->with('status','Email Changed Successfully');
        }
        return back()->with('status','Email Change Unsucessfull Enter a Valid Current email');
    }
}
