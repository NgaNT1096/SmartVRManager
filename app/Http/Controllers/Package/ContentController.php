<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Model\Package\Content;
use App\Model\Package\Theme;
use App\Http\Requests\Package\StoreContentRequest;
use App\Http\Requests\Package\updateContentRequest;
use Illuminate\Support\Facades\Validator;
use App\Config\constant;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use Response;

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
            'link_4k' =>'required',
            'link_2k' =>'required',
            'theme_id' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }else {
            $content = new Content;
            
            if ($request->file('link_4k')->isValid()) {
                $file_4k = $request->file('link_4k');
                $name_4k = str_slug($request->title).'.'.$file_4k->getClientOriginalExtension();
                $destinationPath_4k = public_path('/uploads/4k');
                $file_4k->move($destinationPath_4k, $name_4k);
                $content->link_4k = "/uploads/4k/".$name_4k;

                $file_2k = $request->file('link_2k');
                $name_2k = str_slug($request->title).'.'.$file_2k->getClientOriginalExtension();
                $destinationPath_2k = public_path('/uploads/2k');
                $file_2k->move($destinationPath_2k, $name_2k);
                $content->link_2k = "/uploads/2k/".$name_2k;

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
        return Response::download($file);
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
    public function update(updateContentRequest $request, $id)
    {
        if (! Gate::allows(config('constants.CONTENT_PERMISSION'))) {
            return abort(401);
        }
        $content = Content::findOrFail($id);
        $content->update($request->all());

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
