<?php

namespace App\Http\Controllers\Backend;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //

    public function addSlide(Request $request)
    {

    }

    public function listSlides(Request $request)
    {
        return view('admin.setting.slides');
    }

    public function getSlidesByAttribute(Request $request)
    {
        $slides = Slide::query();

        return \Datatables::of($slides)->addColumn('action', function($slide) {

        })->make(true);
    }

    public function listSetting(Request $request)
    {

    }

    public function updateSetting(Request $request)
    {

    }
}
