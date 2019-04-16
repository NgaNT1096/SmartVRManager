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
        'created_by_id'
        
    ];
    public function setCreatedByIdAttribute($input)
    {
        $this->attributes['created_by_id'] = $input ? $input : null;
    }
    public function setThemeAttribute($input)
    {
        $this->attributes['theme_id'] = $input ? $input : null;
    }

    public function themes(){
        return $this->belongsTo('App\Model\Package\Theme','theme_id');
    }

    public function created_by(){
        return $this->belongsTo('App\User','created_by_id');
    }
}
