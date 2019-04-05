<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Model\Package\Content;
use App\Model\Package\Theme;
use App\Http\Requests\package\StoreContentRequest;
use Illuminate\Support\Facades\Validator;
use App\Config\constant;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Auth;
class ContentController extends Controller
{
    public function index()
    {
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }
        if(Auth::user()->name === "Admin"){
            $contents = Content::all();
        }else{
            $contents = Content::where('user_id',Auth::user()->id)->get();
        }
        

        return view('user.package.content.index', compact('contents'));
    }
    
    public function create()
    {
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }

        $themes = Theme::orderBy('name')->get();
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
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }
        
        $content = Content::create($request->except('user_id'));
        $content->user_id = Auth::user()->id;
        $content->save();

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
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
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
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
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
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
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
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Content::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
    public function handUploadVideo($request)
    {
        if($request->hasFile('link')){
            $image = $request->file('link');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });

            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('images/1/smalls'.'/'.$fileName, $img, 'public');
            
        }

    }
}
