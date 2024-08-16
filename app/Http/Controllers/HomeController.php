<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $image= asset('img/image.png');
        return view('home',['image'=>$image]);
    }
}
