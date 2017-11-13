<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use App\Models\Slide;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Cloner\Data;

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

        return \Datatables::of($slides)->addColumn('action', function ($slide) {

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

        $item = Setting::find($id);

        $item->update([
            $name => $value
        ]);
    }

    public function updateSetting(Request $request)
    {

    }

    public function listTestimonials(Request $request)
    {
        return view('admin.setting.testimonials');
    }

    public function getTestimonialsByAttribute(Request $request)
    {
        $items = Testimonial::all();
        return \Datatables::of($items)->editColumn('user', function ($item) {
            return '<a href="javascript:;" data-type="text" 
                data-pk="' . $item->id . '" data-url="' . url('admin/settings/testimonial/update-inline', ['id' => $item->id]) . '" 
                data-id="' . $item->id . '" 
                data-name="user"
                class="editable editable-click"> ' . $item->user . ' </a>';
        })->editColumn('content', function ($item) {
            return '<a href="javascript:;" data-type="text" 
                data-pk="' . $item->id . '" data-url="' . url('admin/settings/testimonial/update-inline', ['id' => $item->id]) . '" 
                data-id="' . $item->id . '" 
                data-name="content"
                class="editable editable-click"> ' . $item->content . ' </a>';
        })->editColumn('address', function ($item) {
            return '<a href="javascript:;" data-type="text" 
                data-pk="' . $item->id . '" data-url="' . url('admin/settings/testimonial/update-inline', ['id' => $item->id]) . '" 
                data-id="' . $item->id . '" 
                data-name="address"
                class="editable editable-click"> ' . $item->address . ' </a>';
        })->addColumn('action', function ($item) {
            return '';
        })->make(true);
    }

    public function updateInlineTestimonial($id, Request $request)
    {
        $testimonial = Testimonial::find($id);

        $name = $request->input('name');
        $value = $request->input('value');

        $testimonial->update([
            $name => $value
        ]);

        cache()->rememberForever('testimonials', function () {
            return Testimonial::all();
        });

    }

    public function updateInlineSetting($id, Request $request)
    {
        $setting = \DB::table('settings')->where('id', $id);


        $name = $request->input('name');
        $value = $request->input('value');

        if($setting->first()) {
            $setting->update([
                $name => $value
            ]);

            cache()->rememberForever('settings', function () {
                return Setting::all();
            });
        }

    }

    public function storeTestimonials(Request $request)
    {
        $data = $request->all();

        Testimonial::create($data);

        cache()->rememberForever('testimonials', function () {
            return Testimonial::all();
        });

        return response([
            'status' => 1,
            'message' => 'Thành công'

        ]);
    }
}
