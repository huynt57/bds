<?php

namespace App\Http\Controllers\Frontend;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function index()
    {
        $features = House::where('is_feature', true)->orderBy('id', 'desc')->take(15)->get();
        $sells = House::whereIn('type', [House::SALE, House::FOR_SALE])->orderBy('id', 'desc')->take(15)->get();
        $rents = House::whereIn('type', [House::RENT, House::FOR_RENT])->orderBy('id', 'desc')->take(15)->get();
        return view('frontend.index', compact('features', 'sells', 'rents'));
    }

    public function getHouseMarker()
    {
        $houses = House::paginate(10);

        $returnArr = [];

        foreach ($houses as $house) {
            $itemArr = [];
            $itemArr['name'] = $house->name;
            $itemArr['location_latitude'] = $house->lat;
            $itemArr['location_longitude'] = $house->lng;
            $itemArr['map_image_url'] = $house->main_images;
            $itemArr['name_point'] = $house->name;
            $itemArr['description_point'] = 'tt';
            $itemArr['get_directions_start_address'] = '';
            $itemArr['phone'] = '0444444444444';
            $itemArr['url_point'] = '';

            $returnArr[] = $itemArr;
        }

        $centerPoint['lat'] = $returnArr[0]['location_latitude'];
        $centerPoint['lng'] = $returnArr[0]['location_longitude'];

        return response([
            'data' => ['Historic' => $returnArr],
            'center' => $centerPoint
        ]);
    }


    public function getHouseByAttribute(Request $request)
    {
        $type = $request->input('type');
        $categoryId = $request->input('category_id');
        $keyword = $request->input('keyword');

        $items = House::query();

        if(!empty($type))
        {
            $items = $items->where('type', $type);
        }

        if(!empty(trim($keyword)))
        {
            $items->where(function($query) use ($keyword) {
                $query->where('name', 'LIKE', '%'.$keyword.'%');
                $query->orWhere('address', 'LIKE', '%'.$keyword.'%');
            });
        }

        if(!empty($categoryId))
        {
            $items = $items->where('category_id', $categoryId);
        }

        $items = $items->paginate(10);

        return view('frontend.houses', compact('items'));

    }

    public function detail($id, Request $request)
    {
        $house = House::find($id);

        if (!$house) {
            if ($request->ajax()) {
                return response([
                    'status' => 0,
                    'message' => 'Dữ liệu không hợp lệ'
                ]);
            }

            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if ($request->ajax()) {
            return view('frontend.house', compact('house'))->render();
        }

        return view('frontend.house', compact('house'));

    }

    public function addToWishlist(Request $request)
    {
        if (!auth('frontend')->check()) {
            return response([
                'status' => 0,
                'message' => 'Bạn chưa đăng nhập'
            ]);
        }
        $userId = auth('frontend')->user()->id;
        $houseId = $request->input('house_id');

        auth('frontend')->user()->sync([$houseId]);

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);
    }

}
