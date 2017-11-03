<?php

namespace App\Http\Controllers\Backend;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class HouseController extends Controller
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
            ->editColumn('is_featured', function($house) {

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
    }

    public function edit()
    {


    }

    public function update()
    {

    }
}
