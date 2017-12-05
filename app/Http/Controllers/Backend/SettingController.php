<?php

namespace App\Http\Controllers\Backend;

use App\Models\Bank;
use App\Models\Region;
use App\Models\Setting;
use App\Models\Slide;
use App\Models\Testimonial;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\VarDumper\Cloner\Data;

class SettingController extends AdminController
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

            return
                '<a href="#update-slide" data-toggle="modal" data-id="' . $slide->id . '" class="btn btn-sm green btn-outline update"> Sửa</a>';

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

    public function updateSlide($id, Request $request)
    {
        $name = $request->input('name');
        $data = $request->all();
        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['path'] = $this->saveImage($request->file('image'));
        }
        $slide = Slide::find($id);

        if (!$slide) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }
        $slide->update($data);

        return redirect()->back()->with('success', 'Cập nhật Thành công');
    }

    public function getImageSlide(Request $request)
    {
        $id = $request->input('id');
        $slide = Slide::find($id);
        if (!$slide) {
            return response([
                'data' => 'http://www.placehold.it/200x180/EFEFEF/AAAAAA&amp;text=no+image',
                'name' => ''
            ]);
        }
        if (empty($slide->path)) {
            return response([
                'data' => 'http://www.placehold.it/200x180/EFEFEF/AAAAAA&amp;text=no+image',
                'name' => $slide->name
            ]);
        }

        return response([
            'data' => $slide->path,
            'name' => $slide->name
        ]);
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
            $url = url('admin/settings/testimonial/delete', ['id' => $item->id]);
            return  '<a href="' . $url . '"  data-id="' . $item->id . '" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';
        })->make(true);
    }

    public function deleteTestimonial($id)
    {
        Testimonial::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function updateInlineTestimonial($id, Request $request)
    {
        $testimonial = Testimonial::find($id);

        $name = $request->input('name');
        $value = $request->input('value');

        $testimonial->update([
            $name => $value
        ]);

        cache()->forget('testimonials');
        cache()->rememberForever('testimonials', function () {
            return Testimonial::all();
        });

    }

    public function updateInlineSetting($id, Request $request)
    {
        $setting = \DB::table('settings')->where('id', $id);


        $name = $request->input('name');
        $value = $request->input('value');

        if ($setting->first()) {
            $setting->update([
                $name => $value
            ]);

            cache()->forget('settings');

            cache()->rememberForever('settings', function () {
                $settings = Setting::all();
                $arr = [];
                foreach ($settings as $setting) {
                    $arr[$setting->name] = $setting->value;
                }
                return $arr;
            });
        }

    }

    public function storeTestimonials(Request $request)
    {
        $data = $request->all();

        Testimonial::create($data);

        cache()->forget('testimonials');
        cache()->rememberForever('testimonials', function () {
            return Testimonial::all();
        });

        return response([
            'status' => 1,
            'message' => 'Thành công'

        ]);
    }

    public function listBanks(Request $request)
    {
    	return view('admin.setting.banks');
    }

    public function listBanksByAttribute(Request $request)
    {
    	$banks = Bank::all();
    	return \Datatables::of($banks)->editColumn('bank', function ($item) {
		    return '<a href="javascript:;" data-type="text" 
                data-pk="' . $item->id . '" data-url="' . url('admin/settings/bank/update-inline', ['id' => $item->id]) . '" 
                data-id="' . $item->id . '" 
                data-name="bank"
                class="editable editable-click"> ' . $item->bank . ' </a>';
	    })->editColumn('rate', function ($item) {
		    return '<a href="javascript:;" data-type="text" 
                data-pk="' . $item->id . '" data-url="' . url('admin/settings/bank/update-inline', ['id' => $item->id]) . '" 
                data-id="' . $item->id . '" 
                data-name="rate"
                class="editable editable-click"> ' . $item->rate . ' </a>';
	    })->addColumn('action', function ($item) {
		    $url = url('admin/settings/bank/delete', ['id' => $item->id]);
		    return  '<a href="' . $url . '"  data-id="' . $item->id . '" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';
	    })->make(true);
    }

	public function storeBanks(Request $request)
	{
		$data = $request->all();

		Bank::create($data);

		cache()->forget('banks');
		cache()->rememberForever('banks', function () {
			return Bank::all();
		});

		return response([
			'status' => 1,
			'message' => 'Thành công'

		]);
	}

	public function updateInlineBank($id, Request $request)
	{
		$testimonial = Bank::find($id);

		$name = $request->input('name');
		$value = $request->input('value');

		if($name == 'rate')
        {
            if(!is_numeric($value))
            {
                return;
            }
        }
		$testimonial->update([
			$name => $value
		]);

		cache()->forget('banks');
		cache()->rememberForever('banks', function () {
			return Bank::all();
		});

	}

	public function deleteBank($id)
	{
		Bank::find($id)->delete();
		return redirect()->back()->with('success', 'Xóa thành công');
	}
}
