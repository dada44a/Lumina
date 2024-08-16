<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\subscription_applier;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $course = Courses::orderBy('created_at', 'desc')->paginate(5);
        $subs = subscription_applier::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.Dashboard',['subscription'=>$subs,'course'=>$course]);
    }
}
