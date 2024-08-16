<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\subscription_applier;
use App\Models\SubscriptionPlan;

class AdminAppliedUserController extends Controller
{
    public function index()
    {
        $subs=subscription_applier::paginate(5);
        return view('Admin.AppliedUsersTable',['subscription'=>$subs]);
    }

    public function store(Request $request)
    {
        $user = User::where('username',$request->username)->first();
        $plan = SubscriptionPlan::where('id_code',$request->type)->first();
        $user->subscription_type_id= $plan->id;
        $user->save();
        subscription_applier::where('username',$request->username)->delete();
        return back()->with('status','update sucessfull');
    }
    public function remove($username)
    {
        subscription_applier::where('username',$username)->delete();
        return back();
    }

    
}
