<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Package\Content;
use App\SecretOtp;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Config\constant;
use Auth;

class ContentController extends Controller
{
    public function download($id){
        $content = Content::find($id);
        $file = public_path()."/" . $content->link ;
        return response()->json($file,200);
    }
    public function api_content($otp){
        if( SecretOtp::where('code',$otp)->first() !== null){
            $user_model = User::findOrFail(Auth::getUser()->id);
            if(Auth::user()->name === 'Admin'){
                $contents = Content::all();
            }else{
                $contents = Content::where('created_by_id',Auth::getUser()->id)->get();
            }

            foreach($contents as $content){
                $content->url_download =  URL::to('/') .$content->link;
            }
            return response()->json($contents, 200);

        }else{
            return response()->json("not found data", 404);
        }
    }

    public function index(Request $request,$otp){
        $secret = $request->header('secret'); // string
        if($secret === "123321"){
            SecretOtp::checkTimeOut($otp);
            if( SecretOtp::where('code',$otp)->first() !== null){
                $codeOtp =  SecretOtp::where('code',$otp)->first();
                $codeOtp->num_request += 1;
                $codeOtp->save();

                $user_login = $codeOtp->user_id;
                $data_detail = [];
                if( $codeOtp->num_request <= $codeOtp->max_device ){
                    if($codeOtp->user_id === 1){
                        $contents = Content::all();
                    }else{
                        $contents = Content::where('created_by_id',$user_login)->get();
                    }
                    foreach( $contents as $content){
                       // $links->put('link',public_path()."/download/" .$otp .'/' . $content->id);
                       $data_detail[] = [
                            'id' => $content->id,
                            'name' => $content->title,
                            'link' => "http://smartvr.holomia.com/api/content/detail/" . $content->id,
                       ];
                    }
                    return response()->json( $data_detail, 200);
                }else{
                    $codeOtp->delete();
                    //khi so truy cap vuot qua gioi han thi k tra ve du lieu nua
                    return response()->json("The device exceeds the access limit") ;
                }

            }else{
                return response()->json("not found data, Login to receive access code", 404);
            }

        }else{
            return response()->json("The device is not authorized to access") ;
        }
    }
    public function get_detail_content($id){
            $content = Content::findOrFail($id);
            $file = "http://smartvr.holomia.com" . $content->link ;

            $response = [
                'link' => $file
            ];
            return response()->json($response,200);
        
    }
}
