<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'time_start', 'time_end','user_id', 'plan_id','total_price'];

    public function customer(){
        return $this->belongsto('App\User','user_id');
    }
    public function plan(){
        return $this->belongsTo('App\Model\Package\Plan','plan_id');
    }
    public function calculateDay($date_start, $date_end){
        //Convert them to timestamps.
        $date1Timestamp = strtotime($date_start);
        $date2Timestamp = strtotime($date_end);
        
        //Calculate the difference.
        $difference = $date2Timestamp - $date1Timestamp;
        return $difference;
    }
}
