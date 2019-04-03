<?php

namespace App\Model\Package;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'name'
    ];
    public function content()
    {
        return $this->hasMany('App\Model\Package\Theme')->withPivot('content');
    }
}
