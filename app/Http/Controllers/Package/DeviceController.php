<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Model\Package\Oculus;
use App\Http\Requests\package\StoreDeviceRequest;
use Illuminate\Support\Facades\Validator;

class DeviceController extends Controller
{
    public function index()
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }

        $devices = Oculus::all();

        return view('user.package.device.index', compact('devices'));
    }
    public function create()
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }
        return view('user.package.device.create');
    }
    /**
     * Store a newly created Permission in storage.
     *
     */
    public function store(StoreDeviceRequest $request)
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }
        Oculus::create($request->all());

        return redirect()->route('admin.device.index');
    }
    /**
     * Show the form for editing Permission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }
        $device = Oculus::findOrFail($id);
        return view('user.package.device.edit', compact('device'));
    }

     /**
     * Update Permission in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreDeviceRequest $request, $id)
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }
        $devices = Oculus::findOrFail($id);
        $devices->update($request->all());

        return redirect()->route('admin.device.index');

    }


    /**
     * Remove Permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }
        $devices = Oculus::findOrFail($id);
        $devices->delete();

        return redirect()->route('admin.device.index');
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows(config('constants.DEVICE_PERMISSION'))) {
            return abort(401);
        }
        if($request->input('ids')){
            $entries = Oculus::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
