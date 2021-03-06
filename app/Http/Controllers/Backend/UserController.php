<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreateInvestorRequest;
use App\Http\Requests\CreatePartnerRequest;
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

    public function indexInvestor()
    {
        return view('admin.user.investors');
    }

	public function indexPartner()
	{
		return view('admin.user.partners');
	}

    public function getUserByAttribute(Request $request)
    {
        $users = User::where('type', '<>', User::INVESTOR)->where('type', '<>', User::PARTNER);
        return Datatables::of($users)
            ->editColumn('type', function ($user) {
                return $user->type_text;
            })
            ->editColumn('status', function ($user) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $user->id . '" data-url="' . url('admin/user/update-inline', ['id' => $user->id]) . '" 
                data-id="' . $user->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $user->status_text . ' </a>';
            })
            ->addColumn('action', function ($user) {

                return '<button class="btn btn-sm yellow btn-outline "> Xem</button>' .
                    '<a href="' . url('admin/user/edit', ['id' => $user->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
                    '<a href="'.url('admin/user/delete', ['id' => $user->id]).'" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';
            })
            ->make(true);
    }

    public function getInvestorByAttribute(Request $request)
    {
        $users = User::investor();
        return Datatables::of($users)
            ->editColumn('type', function ($user) {
                return $user->type_text;
            })
            ->editColumn('status', function ($user) {
                return '<a href="javascript:;" data-type="select" 
                data-pk="' . $user->id . '" data-url="' . url('admin/user/update-inline', ['id' => $user->id]) . '" 
                data-id="' . $user->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $user->status_text . ' </a>';
            })
            ->addColumn('action', function ($user) {

                return '<button class="btn btn-sm yellow btn-outline "> Xem</button>' .
                    '<a href="' . url('admin/user/edit', ['id' => $user->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
                    '<a href="'.url('admin/user/delete', ['id' => $user->id]).'" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';
            })
            ->make(true);
    }

	public function getPartnerByAttribute(Request $request)
	{
		$users = User::partner();
		return Datatables::of($users)
		                 ->editColumn('type', function ($user) {
			                 return $user->type_text;
		                 })
		                 ->editColumn('status', function ($user) {
			                 return '<a href="javascript:;" data-type="select" 
                data-pk="' . $user->id . '" data-url="' . url('admin/user/update-inline', ['id' => $user->id]) . '" 
                data-id="' . $user->id . '" 
                data-name="status"
                class="editable editable-click"> ' . $user->status_text . ' </a>';
		                 })
		                 ->addColumn('action', function ($user) {

			                 return '<button class="btn btn-sm yellow btn-outline "> Xem</button>' .
			                        '<a href="' . url('admin/user/edit', ['id' => $user->id]) . '" class="btn btn-sm green btn-outline "> Sửa</a>' .
			                        '<a href="'.url('admin/user/delete', ['id' => $user->id]).'" class="btn btn-sm red btn-outline delete-btn"> Xóa</a>';
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
        $status = $request->input('value');

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

    public function createInvestor(Request $request)
    {
        return view('admin.user.create_investor');
    }

	public function createPartner(Request $request)
	{
		return view('admin.user.create_partner');
	}

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) {
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

        $cnt = User::where('email', $data['email'])->count();

        if ($cnt > 0) {
            return redirect()->back()->with('error', 'Email đã tồn tại, vui lòng thử email khác');
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

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }

    public function storeInvestor(CreateInvestorRequest $request)
    {
        $data = $request->all();

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        $data['type'] = User::INVESTOR;


        if (!isset($data['status'])) {
            $data['status'] = User::ACTIVE;
        }

        $data['password'] = bcrypt(time());

        User::create($data);

        if ($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Success'
            ]);
        }

        return redirect()->back()->with('success', 'Thêm người dùng thành công');
    }

    public function storePartner(CreatePartnerRequest $request)
    {
        $data = $request->all();

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'));
        }

        $data['type'] = User::PARTNER;


        if (!isset($data['status'])) {
            $data['status'] = User::ACTIVE;
        }

        $data['password'] = bcrypt(time());
        $data['email'] = time().'@gmail.com';
        $data['phone'] = time();

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
        $data = $request->all();

        if (!$user) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if ($request->file('image') && $request->file('image')->isValid()) {
            $data['image'] = $this->saveImage($request->file('image'), $user->image);
        }

        if(empty($data['status']))
        {
            $data['status'] = $user->status;
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

        if (!$user) {
            return redirect()->back()->with('error', 'Dữ liệu không hợp lệ');
        }

        if ($retypePassword != $password) {
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
