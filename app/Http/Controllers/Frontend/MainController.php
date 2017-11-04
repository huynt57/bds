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
        return view('frontend.index', compact('features'));
    }


    public function getHouseByAttribute(Request $request)
    {
        $categoryId = $request->input('category_id');

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
