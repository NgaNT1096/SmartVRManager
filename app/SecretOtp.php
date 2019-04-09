<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class SecretOtp extends Model
{
    public $EXPIRATION_TIME = 60;//minute
    protected $fillable = [
        'code',
        'user_id',
        'max_device',
        'num_request',
        'exp_time'
    ];

    public function user()
    {
        return $this->hasOne(User::Class);
    }
    public function generateCode($codeLength = 4)
    {
        $min = pow(10, $codeLength);
        $max = $min * 10 - 1;
        $code = mt_rand($min, $max);

        var_dump($code);
    }
    
    public static function checkTimeOut($otp){
        if( SecretOtp::where('code',$otp)->first() !== null){   
            $code_otp = SecretOtp::where('code', $otp)->first();
            $mytime = date("Y-m-d H:i:s");
            $time_created = clone $code_otp->created_at;
            
            $time_now = Carbon::now();
            $compare = $time_created->diffInMinutes($time_now);
            if($compare > 6){
                $code_otp->delete();
                var_dump("het phien" .$compare);
            }else{
                return response()->json("try login, get access code") ;
            }
        }else{
            return response()->json("The device is not authorized to access") ;
        }
    }
}
