<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Image;

class AdminController extends Controller
{
    //
    public function saveImage($file, $old = null)
    {
        $filename = md5(time()) . str_slug($file->getClientOriginalName()).'.'.$file->getClientOriginalExtension();
        Image::make($file->getRealPath())->save(public_path('files/'. $filename));

        if ($old) {
            @unlink(public_path('files/' .$old));
        }
        return $filename;
    }
}
