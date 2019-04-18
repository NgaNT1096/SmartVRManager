<?php

namespace App\Model\Package;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'max_headsets',
        'life_time',
        'description',
        'price',
        'listFunction'

    ];
    public function order(){
        return $this->hasMany('App\Model\Order');
    }
}
