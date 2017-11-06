<?php

namespace App\Http\Controllers\Backend;

use App\Models\House;
use App\Models\Image;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class HouseController extends AdminController
{
    //
    public function index()
    {
        return view('admin.house.list');
    }

    public function getHouseByAttribute()
    {
        $houses = \DB::table('houses')
            ->select(\DB::raw('houses.*, categories.name as category, users.name as agent'))
            ->leftJoin('categories', 'houses.category_id', '=', 'categories.id')
            ->leftJoin('users', 'houses.user_id', '=', 'users.id');

        return Datatables::of($houses)
            ->editColumn('is_featured', function ($house) {

            })
            ->addColumn('action', function ($house) {

            })
            ->editColumn('created_at', function ($house) {
                return Carbon::createFromFormat('Y-m-d H:i:s', $house->created_at)->format('d/m/Y H:i');
            })
            ->make(true);
    }

    public function create()
    {
        return view('admin.house.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //   $data['user_id'] = auth('backend')->user()->id;

        if ($request->file('main_image') && $request->file('main_image')->isValid()) {
            $data['main_images'] = $this->saveImage($request->file('main_image'));
        }

        if (!is_numeric($data['price'])) {
            $data['price'] = 0;
        }

        if(!is_numeric($data['district_id']))
        {
            $data['district_id'] = 0;
        }

        if(!is_numeric($data['category_id']))
        {
            $data['category_id'] = 0;
        }

        if(!is_numeric($data['city_id']))
        {
            $data['city_id'] = 0;
        }

        if(!is_numeric($data['ward_id']))
        {
            $data['ward_id'] = 0;
        }

        \DB::beginTransaction();

        try {

            $house = House::create($data);

            $images = $request->file('images');

            if ($images) {

                foreach ($images as $image) {
                    $img = $this->saveImage($image);

                    Image::create([
                        'path' => $img,
                        'house_id' => $house->id
                    ]);
                }
            }

            \DB::commit();

        } catch (\Exception $ex) {
            \DB::rollBack();

            dump($ex->getMessage());
            dd($ex->getTraceAsString());
            return redirect()->back()->with('error', 'Thêm dữ liệu không thành công');
        }

        return redirect()->back()->with('success', 'Thêm dữ liệu thành công');

    }

    public function edit($id)
    {
        $house = House::find($id);

        if (!$house) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        return view('admin.house.edit', compact('house'));
    }

    public function update($id, Request $request)
    {
        $house = House::find($id);

        if (!$house) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        $data = $request->all();

        if ($request->file('main_image') && $request->file('main_image')->isValid()) {
            $data['main_images'] = $this->saveImage($request->file('main_image'), $house->main_images);
        }

        if (!is_numeric($data['price'])) {
            $data['price'] = 0;
        }

        if(!is_numeric($data['district_id']))
        {
            $data['district_id'] = 0;
        }

        if(!is_numeric($data['city_id']))
        {
            $data['city_id'] = 0;
        }

        if(!is_numeric($data['ward_id']))
        {
            $data['ward_id'] = 0;
        }

        \DB::beginTransaction();

        try {

            $house = House::create($data);

            $images = $request->file('images');

            if ($images) {
                foreach ($images as $image) {
                    $img = $this->saveImage($image);

                    Image::create([
                        'path' => $img,
                        'house_id' => $house->id
                    ]);
                }
            }

            \DB::commit();

        } catch (\Exception $ex) {
            \DB::rollBack();

            return redirect()->back()->with('error', 'Thêm dữ liệu không thành công');
        }

        return redirect()->back()->with('success', 'Thêm dữ liệu thành công');
    }

    public function changeFeaturedHouse(Request $request)
    {
        $houseId = $request->input('house_id');

        $house = House::find($houseId);

        if (!$house) {
            return response([
                'status' => 0,
                'message' => 'Dữ liệu không hợp lệ'
            ]);
        }

        if ($house->is_featured) {
            $house->is_featured = false;
        } else {
            $house->is_featured = true;
        }

        $house->save();

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);
    }
}
