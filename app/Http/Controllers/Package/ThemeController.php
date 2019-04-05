<?php

namespace App\Http\Controllers\Package;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Package\addThemeRequest;
use App\Http\Requests\Package\editThemeRequest;
use App\Model\Package\Theme;

class ThemeController extends Controller
{
    public function index()
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
            return abort(401);
        }

        $themes = Theme::all();

        return view('user.package.theme.index', compact('themes'));
    }
    public function create()
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
            return abort(401);
        }
        return view('user.package.theme.create');
    }
    /**
     * Store a newly created Permission in storage.
     *
     */
    public function store(addThemeRequest $request)
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
            return abort(401);
        }
        Theme::create($request->all());

        return redirect()->route('admin.theme.index');
    }
    /**
     * Show the form for editing Permission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
            return abort(401);
        }
        $theme = Theme::findOrFail($id);
        return view('user.package.theme.edit', compact('theme'));
    }

     /**
     * Update Permission in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(editThemeRequest $request, $id)
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
            return abort(401);
        }
        $theme = Theme::findOrFail($id);
        $theme->update($request->all());

        return redirect()->route('admin.theme.index');

    }


    /**
     * Remove Permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
            return abort(401);
        }
        $theme = Theme::findOrFail($id);
        $theme->delete();

        return redirect()->route('admin.theme.index');
    }

    /**
     * Delete all selected Permission at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows(config('constants.THEME_PERMISSION'))) {
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
