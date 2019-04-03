<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Package\Plan;
class OrderController extends Controller
{
    public function getPlan($id){
        $plan = Plan::find($id);
        return view('user/order',compact('plan'));
    }
}
