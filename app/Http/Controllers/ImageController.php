<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /*public function upload(Request $request)*/
    public function upload(ImageUploadRequest $request)
    {
        $file = $request->file('image');
        $name = Str::random(10);
        $url = \Storage::putFileAs('images', $file, $name . '.' . $file->extension());

        /*return env('APP_URL') .  '/' . $url;*/
        return [
            'url' => env('APP_URL') .  '/' . $url,
        ];
    }
}
