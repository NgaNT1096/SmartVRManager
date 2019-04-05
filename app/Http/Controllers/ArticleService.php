<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleService extends Controller
{
    public function handleUploadedImage($image)
    {
        if (!is_null($image)) {
            $image->move(public_path('images') . 'temp');
        }
    }
    public function handUploadVideo($video)
    {
        if(!is_null($video)){

        }

    }
}
