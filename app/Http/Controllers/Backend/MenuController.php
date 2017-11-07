<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //
    public function index()
    {
        $menus = Menu::where('parent_id', null)->get();
        return view('admin.menu.index', compact('menus'));
    }


    public function store(Request $request)
    {
        $json = $request->input('data');

        $data = json_decode($json);
    }
}
