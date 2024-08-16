<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSignOutController extends Controller
{
    public function store()
    {
        auth('admin')->logout();
        return redirect()->route('index');
    }
}
