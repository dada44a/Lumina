<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserTableController extends Controller
{
    public function index()
    {
        $users = User::paginate(9);
        return view('Admin.UserTable',['users'=>$users]);
    }
}
