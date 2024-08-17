<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PasswordChange;
use Illuminate\Support\Facades\Hash;

class ForgotPassword extends Controller
{
    public function index()
    {
        return view('auth.ForgotPassword');
    }
    public function store(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if($user)
        {
            $random = Str::random(10);

            PasswordChange::create([
                'email'=>$user->email,
                'token'=>$random
            ]);
            
            return redirect()->route('sendmail', ['token' => $random, 'email' => $request->email]);
        }
        return back()->with('status','Email Not Found');
    }
    public function recover($token)
    {
        return view('auth.FogotPasswordChange',['token'=>$token]);
    }

    public function recovery(Request $request, $token)
    {
        $user = PasswordChange::where('token',$token)->first();
        $users = User::where('email',$user->email)->first();

        $request->validate([
            'password' => 'required|confirmed'
        ]);

        if ($users) {
            $users->password = Hash::make($request->password);
            $users->save(); // Save the changes to the database

            $user->delete();
            return redirect()->route('login');
        }
        return back()->with('status',' Sorry can\'t change password');
        
    }
}
