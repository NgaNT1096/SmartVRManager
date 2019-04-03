<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Model\Package\Content;
use App\Model\Package\Theme;
use App\Http\Requests\package\StoreContentRequest;

class ContentController extends Controller
{
    public function index()
    {
        if (! Gate::allows('content_manage')) {
            return abort(401);
        }

        $contents = Content::all();

        return view('user.package.content.index', compact('contents'));
    }
    
    public function create()
    {
        if (! Gate::allows('content_manage')) {
            return abort(401);
        }
        $themes = Theme::get()->pluck('name', 'name');

        return view('user.package.content.create', compact('themes'));
    }
        /**
     * Store a newly created Role in storage.
     *
     * @param  \App\Http\Requests\StoreRolesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContentRequest $request)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }
        $content = Content::create($request->except('theme'));
        $content->theme = $request->input('theme') ? $request->input('theme') : [];

        return redirect()->route('admin.content.index');
    }
    /**
     * Show the form for editing Role.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('content_manage')) {
            return abort(401);
        }
        $themes = Theme::get()->pluck('name', 'name');

        $content = Content::findOrFail($id);

        return view('user.package.content.edit', compact('content', 'themes'));
    }

    /**
     * Update Role in storage.
     *
     * @param  \App\Http\Requests\UpdateRolesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesRequest $request, $id)
    {
        if (! Gate::allows('content_manage')) {
            return abort(401);
        }
        $content = Content::findOrFail($id);
        $content->update($request->except('theme'));
        $theme = $request->input('theme') ? $request->input('theme') : [];
        $content->syncPermissions($theme);

        return redirect()->route('admin.content.index');
    }


    /**
     * Remove Role from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('content_manage')) {
            return abort(401);
        }
        $content = Content::findOrFail($id);
        $content->delete();

        return redirect()->route('admin.content.index');
    }

    /**
     * Delete all selected Role at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('content_manage')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Content::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
