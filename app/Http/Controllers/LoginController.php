<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
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
            $user = User::where('email',$request->email)->first();
            if($user->subscription_end!= NULL)
            {
                    if(Carbon::now()->greaterThanOrEqualTo($user->subscription_end)  )
                {
                    $user->subscription_type_id= NULL;
                    $user->subscription_start= NULL;
                    $user->subscription_end=NULL;
                    $user->save();
                    return redirect()->route('courses');
                }
                else
                {
                    return redirect()->route('courses');
                }

            }
            else{
                return redirect()->route('courses');
            }
        }
    }
}
