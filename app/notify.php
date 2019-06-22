<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notify extends Model
{
    protected $fillable = [
        'target',
        'title',
        'content'
    ];
}
