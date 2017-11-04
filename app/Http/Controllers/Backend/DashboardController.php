<?php

namespace App\Http\Controllers\Backend;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //
    public function index()
    {

        $users = User::query()->count();
        $houses = House::query()->count();

        return view('admin.dashboard.index', compact('users', 'houses'));
    }
}
