<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PasswordRecovery;
use Illuminate\Support\Facades\Mail;

class RecoveryMailController extends Controller
{
    public function sendMail($token,$email)
    {
        $to=$email;
        $msg="http://127.0.0.1:8000/forget/$token";
        $subject="change password";
        Mail::to($to)->send(new PasswordRecovery($msg,$subject));
        return redirect()->route('login');
    }
}
