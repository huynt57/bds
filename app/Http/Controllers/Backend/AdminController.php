<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.backend', ['except' => ['resetPassword', 'getTimeRange', 'adminFromEsg', 'login', 'processLogin']]);
    }

    public function saveImage($file, $old = null)
    {
        $filename = md5(time()) . str_slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();
        Image::make($file->getRealPath())->save(public_path('files/' . $filename));

        if ($old) {
            @unlink(public_path('files/' . $old));
        }
        return $filename;
    }

    public function login()
    {
        return view('admin.login');
    }

    public function processLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        $check = User::where('email', $email);

        if ($check->count() <= 0) {
            return redirect()->back()->with('error', 'Email không tồn tại');
        }

        $userPassword = $check->first()->password;

        if (!\Hash::check($password, $userPassword)) {
            return redirect()->back()->with('error', 'Mật khẩu không chính xác');
        }

        $isRemember = false;

        if ($remember == 1) {
            $isRemember = true;
        }

        auth('backend')->login($check->first(), $isRemember);

        return redirect()->intended()->with('success', 'Đăng nhập thành công');

    }

    public function logout()
    {
        auth('backend')->logout();
        return redirect()->to(url('/'));
    }

    public function getUser()
    {
        $user = auth('backend')->user();

        return view('admin.current_user', compact('user'));
    }
}
