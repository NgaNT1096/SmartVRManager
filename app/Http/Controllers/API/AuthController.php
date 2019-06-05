<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SecretOtp;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        $users = User::all();
        return response()->json($users,200);
    }

    // api
    public function signin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5',
            'version' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        $version = $request->input('version');
        if ($user = User::where('email', $email)->first()){
            if(Hash::check($password, $user->password)){
                $code = $this->generateCode();
                    //khi login tao ma code
                    $codeOtp = new SecretOtp([
                        'code' => $code,
                        'user_id' => $user->id,
                        'max_device'=> 6,
                        'num_request' => 0
                    ]);
                    if($code !== null){
                        $codeOtp->save();
                    }

                $credentials = [
                'email' => $email,
                'password' => $password
                ];
                $response = [
                    'msg' => 'success',
                    'code' => $code
                ];
                return response()->json($response, 200);
            }

        }
            $response = [
                'msg' => 'fail'
            ];
            return response()->json($response, 404);
    }

    public function logout($userid){
        $code_otp = CodeOtp::where('user_id', $userid)->first();
        $mytime = date("Y-m-d H:i:s");

        $expires = clone $code_otp->created_at;
        $expires->addHours(1);
        var_dump($expires);
    }
    public function getExpiresAttribute() {
        $expires = clone $this->created_at;
        $expires->addHours(1);
        return $expires;
      }
    public function generateCode($codeLength = 4)
    {
        $min = pow(10, $codeLength);
        $max = $min * 10 - 1;
        $code = mt_rand($min, $max);

        return $code;
    }
}
