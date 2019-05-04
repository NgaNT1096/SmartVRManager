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
use Illuminate\Support\Facades\Storage;
use App\User;
class ContentController extends Controller
{
    public function index()
    {
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }
        $user_model= User::findOrFail(Auth::getUser()->id);
        if(Auth::user()->name === "Admin"){
            $contents = Content::all();
        }else{
            $contents = Content::where('created_by_id',Auth::getUser()->id)->get();
        }
        
        return view('user.package.content.index', compact('contents','user_model'));
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
    public function store(Request $request)
    {
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }

        //$content = Content::create($request->except('created_by_id'));
        //$content->created_by_id = Auth::getUser()->id ;
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255|unique:contents',
            'description' => 'required|string|max:255',
            'type_data' => 'required',
            'price' =>'required',
            'link' =>'required',
            'theme_id' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }else {
            $content = new Content;
            
            if ($request->file('link')->isValid()) {
                $fileupload = $request->file('link');
                $name = str_slug($request->title).'.'.$fileupload->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $imagePath = $destinationPath. "/".  $name;
                $fileupload->move($destinationPath, $name);
                $content->link = $name;
            }
               
                $content->title = $request->input('title');
                $content->description = $request->input('description');
                $content->type_data = $request->input('type_data');
                $content->price = $request->input('price');
                $content->created_by_id = Auth::getUser()->id ;
                $content->theme_id = $request->input('theme_id');
                $content->save();

                return redirect()->route('admin.content.index');

        }
    }
    public function upload(Request $request){
        $path = $request->file('link')->store('upload');
        echo $path;
    }
    public function getDownload($id){
        $content = Content::findOrFail($id);
        $file = public_path()."/" . $content->link ;
        //return Response::download($file);
        var_dump($file);
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

}
