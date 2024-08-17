<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    public function index()
    {
        return view('Admin.Accounts');
    }
}
