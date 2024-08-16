<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        return view('pricing');
    }
}
