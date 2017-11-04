<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('admin.user.list');
    }

    public function getUserByAttribute(Request $request)
    {
        $users = User::query();
        return Datatables::of($users)->make(true);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        User::create($data);

        return response([
            'status' => 1,
            'message' => 'Success'
        ]);
    }
}
