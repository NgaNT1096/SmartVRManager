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
        'slug',
        'published'
        
    ];
    public function Theme_Contents(){
        return $this->belongsToMany('App\Model\Package\ThemeContent');
    }
    public function ower()
    {
        return $this->belongsTo(User::class);
    }
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeUnpublished($query)
    {
        return $query->where('published', false);
    }
    public function hasThemeTo($theme): bool
    {
        return $this->theme->contains('id', $theme->id);
    }
}
