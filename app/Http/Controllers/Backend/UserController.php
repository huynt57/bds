<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;

class UserController extends AdminController
{
    //
    public function index()
    {
        return view('admin.user.list');
    }

    public function getUserByAttribute(Request $request)
    {
        $users = User::query();
        return Datatables::of($users)
            ->editColumn('type', function ($user) {
                return $user->type_text;
            })
            ->editColumn('status', function ($user) {
                return $user->status;
            })
            ->addColumn('action', function ($user) {

                return '<button class="btn btn-sm yellow btn-outline "> Xem</button>' .
                    '<a href="' . url('admin/user/edit', ['id' => $user->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
                    '<button class="btn btn-sm red btn-outline "> Xóa</button>';
            })
            ->make(true);
    }

    public function updateStatusUser($id, Request $request)
    {
        $user = User::find($id);

        if (!$user) {
            return response([
                'status' => 0,
                'message' => 'Dữ liệu không hợp lệ'
            ]);
        }
        $status = $request->input('status');

        $user->update([
            'status' => $status
        ]);

        return response([
            'status' => 1,
            'message' => 'Thành công'
        ]);

    }

    public function create(Request $request)
    {
        return view('admin.user.create');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if(!$user)
        {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }
        return view('admin.user.edit', compact('user'));
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->all();

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        if ($data['password'] != $data['retype_password']) {
            return redirect()->back()->with('success', 'Mật khẩu nhập lại không khớp');
        }

        $data['password'] = \Hash::make($data['password']);

        if (empty(trim($data['type']))) {
            $data['type'] = User::AGENT;
        }

        if (!isset($data['status'])) {
            $data['status'] = User::ACTIVE;
        }

        User::create($data);

        if ($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Success'
            ]);
        }

        return redirect()->back()->with('success', 'Thêm người dùng thành công');
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'), $user->image);
        }

        $user->update($data);

        return redirect()->back()->with('success', 'Cập nhật người dùng thành công');
    }

    public function listInvestor(Request $request)
    {
        return view('admin.user.investors');
    }

    public function updatePassword($id, Request $request)
    {
        $password = $request->input('password');
        $retypePassword = $request->input('retype_password');
        $currentPassword = $request->input('current_password');

        $user = User::find($id);

        if(!$user)
        {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if($retypePassword != $password)
        {
            return redirect()->back()->with('error', 'Mật khẩu nhập lại không khớp');
        }

        if (\Hash::check($currentPassword, $user->password)) {

            $user->update([
                'password' => \Hash::make($password)
            ]);

            return redirect()->back()->with('success', 'Cập nhật thành công');
        }

        return redirect()->back()->with('error', 'Mật khẩu hiện tại không chính xác');
    }
}
