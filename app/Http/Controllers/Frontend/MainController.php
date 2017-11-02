<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    //
    public function index()
    {
        return view('frontend.index');
    }

    public function getHouseByAttribute(Request $request)
    {

    }

    public function addToWishlist(Request $request)
    {

    }

}
