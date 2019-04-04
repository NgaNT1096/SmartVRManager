<?php

namespace App\Model\Package;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'name'
    ];
    protected function contents()
    {
        return $this->hasMany('App\Model\Package\Content');
    }
}
