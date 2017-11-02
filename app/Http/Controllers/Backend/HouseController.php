<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    //
    public function index()
    {

    }

    public function getHouseByAttribute()
    {

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
