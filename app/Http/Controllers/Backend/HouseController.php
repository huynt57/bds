<?php

namespace App\Http\Controllers\Backend;

use App\Models\House;
use App\Models\Image;
use App\Models\Region;
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
        $houses = House::select(\DB::raw('houses.*, categories.name as category, users.name as agent'))
            ->leftJoin('categories', 'houses.category_id', '=', 'categories.id')
            ->leftJoin('users', 'houses.agent_id', '=', 'users.id');

        return Datatables::of($houses)
            ->editColumn('type', function ($house) {
//                return '<a href="javascript:;" data-type="select"
//                data-pk="' . $house->id . '" data-url="' . url('admin/house/update-inline', ['id' => $house->id]) . '"
//                data-id="' . $house->id . '"
//                data-name="type"
//                class="editable editable-click"> ' . $house->type_text . ' </a>';
                return $house->type_text;
            })
            ->editColumn('is_feature', function ($house) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $house->id . '" data-url="' . url('admin/house/update-inline', ['id' => $house->id]) . '" 
                data-id="' . $house->id . '" 
                data-name="is_feature"
                class="editable editable-click"> ' . $house->is_feature_text . ' </a>';
            })->editColumn('status', function ($house) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $house->id . '" data-url="' . url('admin/house/update-inline', ['id' => $house->id]) . '" 
                data-id="' . $house->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $house->status_text . ' </a>';
            })
            ->addColumn('action', function ($house) {
                return '<button class="btn btn-sm yellow btn-outline "> Xem</button>' .
                    '<a href="' . url('admin/house/edit', ['id' => $house->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
                    '<a href="' . url('admin/house/delete', ['id' => $house->id]) . '" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';
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

    public function region()
    {
        return view('admin.house.region');
    }

    public function addRegion(Request $request)
    {
        $regionId = $request->input('region_id');
        $check = Region::where('region_id', $regionId)->count();
        if ($check == 0) {
            if ($request->file('image') && $request->file('image')->isValid()) {
                $image = $this->saveImage($request->file('image'));
            }
            $region = \DB::table('province')->where('provinceid', $regionId)->first();

            if ($region) {
                $name = $region->name;
            } else {
                $name = '';
            }
            Region::create([
                'region_id' => $regionId,
                'region_type' => 1,
                'name' => $name,
                'image' => $image
            ]);
        }

        return redirect()->back()->with('success', 'Thêm thành công');

    }

    public function updateInline($id, Request $request)
    {
        $id = $request->input('pk');
        $name = $request->input('name');
        $value = $request->input('value');

        $house = House::find($id);

        $house->update([
            $name => $value
        ]);
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

        if (!is_numeric($data['begin_year'])) {
            $data['begin_year'] = Carbon::now()->year;
        }

        if (!is_numeric($data['district_id'])) {
            $data['district_id'] = 0;
        }

        if (!is_numeric($data['beds'])) {
            $data['beds'] = 0;
        }

        if (!is_numeric($data['size'])) {
            $data['size'] = 0;
        }

        if (!is_numeric($data['agent_id'])) {
            $data['agent_id'] = 0;
        }

        if (!is_numeric($data['bathrooms'])) {
            $data['bath'] = 0;
        }

        if (!is_numeric($data['category_id'])) {
            $data['category_id'] = 0;
        }

        if (!is_numeric($data['city_id'])) {
            $data['city_id'] = 0;
        }

        if (isset($data['status']) && $data['status'] == 'on') {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        if (isset($data['is_feature']) && $data['is_feature'] == 'on') {
            $data['is_feature'] = true;
        } else {
            $data['is_feature'] = false;
        }

        if (!is_numeric($data['ward_id'])) {
            $data['ward_id'] = 0;
        }

        if(isset($data['features'])) {

            $data['features'] = json_encode($data['features']);
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

        if (!is_numeric($data['begin_year'])) {
            $data['begin_year'] = Carbon::now()->year;
        }

        if (!is_numeric($data['district_id'])) {
            $data['district_id'] = 0;
        }

        if (!is_numeric($data['beds'])) {
            $data['beds'] = 0;
        }

        if (!is_numeric($data['agent_id'])) {
            $data['agent_id'] = 0;
        }

        if (!is_numeric($data['bathrooms'])) {
            $data['bath'] = 0;
        }

        if (!is_numeric($data['category_id'])) {
            $data['category_id'] = 0;
        }

        if (!is_numeric($data['city_id'])) {
            $data['city_id'] = 0;
        }

        if (!is_numeric($data['size'])) {
            $data['size'] = 0;
        }

        if (isset($data['status']) && $data['status'] == 'on') {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        if (isset($data['is_feature']) && $data['is_feature'] == 'on') {
            $data['is_feature'] = true;
        } else {
            $data['is_feature'] = false;
        }

        if (!is_numeric($data['ward_id'])) {
            $data['ward_id'] = 0;
        }

        if (isset($data['features'])) {

            $data['features'] = json_encode($data['features']);

        }

        \DB::beginTransaction();

        try {

            $house->update($data);

            $images = $request->file('images');

            if ($images) {

                $cnt = Image::where('house_id', $house->id)->count();

                if($cnt) {
                    Image::where('house_id', $house->id)->delete();
                }

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

            dd($ex->getTraceAsString());

            return redirect()->back()->with('error', 'Cập nhật dữ liệu không thành công');
        }

        return redirect()->back()->with('success', 'Cập nhật dữ liệu thành công');
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

    public function getRegionByAttribute(Request $request)
    {
        $items = Region::all();
        return Datatables::of($items)->addColumn('action', function ($item) {

            $url = url('admin/house/delete-region', ['id' => $item->id]);
            return
                '<a href="#update-slide" data-toggle="modal" data-id="' . $item->id . '" class="btn btn-sm green btn-outline update"> Sửa</a>' .
                '<a href="' . $url . '"  data-id="' . $item->id . '" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';

        })->make(true);
    }

    public function deleteHouse($id)
    {
        House::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa dữ liệu thành công');
    }

    public function deleteRegion($id)
    {
        Region::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa dữ liệu thành công');
    }

    public function getRegionByType(Request $request)
    {
        $type = $request->input('type');
        if ($type == config('constants.WARD')) {
            $tid = 'wardid';
            $items = \DB::table('ward')->get();
        } elseif ($type == config('constants.DISTRICT')) {
            $tid = 'districtid';
            $items = \DB::table('district')->get();
        } elseif ($type == config('constants.PROVINCE')) {
            $tid = 'provinceid';
            $items = \DB::table('province')->get();
        }

        return view('admin.house.option', compact('items', 'tid'))->render();
    }
}
