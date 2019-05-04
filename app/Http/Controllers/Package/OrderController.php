<?php

namespace App\Http\Controllers\Package;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Model\Package\Plan;
use App\Model\Order;
use App\Http\Requests\StoreOrderRequest;
use App\User;
class OrderController extends Controller
{
    public function getPlan($id){
        $plan = Plan::find($id);
        return view('page/order/create',compact('plan'));
    }
    public function viewOrder(){
        $plans = Plan::all();
        return view('page/order/create', compact('plans'));
    }
    public function postOrder(Request $request, $planID)
    {
        $customer = Auth::getUser();
    }
}
