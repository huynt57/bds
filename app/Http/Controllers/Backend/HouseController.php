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

    }

    public function getHouseByAttribute()
    {
        $houses = House::query();

        return Datatables::of($houses)->make(true);
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
