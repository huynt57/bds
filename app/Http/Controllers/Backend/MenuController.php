<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    //
    public function index()
    {
        return view('admin.menu.index');
    }
}
