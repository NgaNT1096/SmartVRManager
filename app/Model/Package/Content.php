<?php

namespace App\Model\Package;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type_data',
        'link',
        'price',
        'theme_id',
        
    ];
    public function themes(){
        return $this->belongsTo('App\Model\Package\Theme','theme_id');
    }

    public function users(){
        return $this->belongsTo('App\User','user_id');
    }
}
