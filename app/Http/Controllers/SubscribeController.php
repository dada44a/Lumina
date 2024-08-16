<?php

namespace App\Http\Controllers;

use App\Models\subscription_applier;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function index(Request $request,$plan)
    {
        return view('subscribe')->with('plan',$plan);
    }

    public function store(Request $request)
    {

        $clouldinaryImage = $request->file('file')->storeOnCloudinary('Payment_recipts');
        $url= $clouldinaryImage->getSecurePath();
        $publicId = $clouldinaryImage->getPublicId();

        subscription_applier::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'subscription_type'=>$request->plan,
            'imageUrl'=>$url
        ]);
        return redirect()->route('courses')->with('status','Your request will be accepted with in 24 Hours. ');
    }
}
