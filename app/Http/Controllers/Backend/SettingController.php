<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    //

    public function index(Request $request)
    {
        $settings = Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

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

    public function updateInline(Request $request)
    {
        $id = $request->input('pk');
        $name = $request->input('name');
        $value = $request->input('value');

        $house = Setting::find($id);

        $house->update([
            $name => $value
        ]);
    }

    public function updateSetting(Request $request)
    {

    }
}
