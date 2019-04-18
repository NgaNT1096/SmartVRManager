<?php

namespace App\Http\Controllers\Package;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Model\Package\Plan;
use App\Model\Order;
use App\Http\Requests\StoreOrderRequest;
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
    public function index()
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }

        $orders = Order::all();

        return view('user.package.order.index', compact('orders'));
    }
    public function create()
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }
        $user = Auth::getUSer();
        $plan = Plan::find($id);
        return view('page.order.create');
    }
    /**
     * Store a newly created Permission in storage.
     *
     */
    public function order(Request $request){
            $plans = Plan::all();
            return view('page/order/create', compact('plans'));
    }
    public function store(StoreOrderRequest $request)
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }
        Order::create($request->all());

        $order = Order::create([
            'name' => "order",
            'time_start' => "11",
            'time_end' => "11",
            'plan_id' => $request->input('info_order'),
            'user_id' => Auth::getUser()->id

        ]);

        var_dump($order);
    }
    /**
     * Show the form for editing Permission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }
        $order = Order::findOrFail($id);
        return view('user.package.order.edit', compact('order'));
    }

     /**
     * Update Permission in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreOrderRequest $request, $id)
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }
        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('admin.order.index');

    }


    /**
     * Remove Permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.order
        .index');
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows(config('constants.ORDER_PERMISSION'))) {
            return abort(401);
        }
        if($request->input('ids')){
            $entries = Theme::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
