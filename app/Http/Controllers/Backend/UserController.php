<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    //
    public function index()
    {

    }

    public function getUserByAttribute(Request $request)
    {
        $users = User::query();
        return Datatables::of($users)->make(true);
    }
}
