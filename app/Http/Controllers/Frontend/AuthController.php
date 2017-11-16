<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class AuthController extends Controller
{
    //
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderGoogleCallback()
    {
        $user = Socialite::driver('google')->user();


        Account::firstOrCreate([
            'google_id' => $user->getId()
        ], [
            'name' => $user->getName(),
            'image' => $user->getAvatar(),
            'facebook_id' => $user->getId(),
            'username' => $user->getNickName()
        ]);

        return redirect()->intended();

        // $user->token;
    }

    public function handleProviderFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();


        Account::firstOrCreate([
            'facebook_id' => $user->getId()
        ], [
            'name' => $user->getName(),
            'image' => $user->getAvatar(),
            'facebook_id' => $user->getId(),
            'username' => $user->getNickName()
        ]);

        return redirect()->intended();

        // $user->token;
    }

    public function processRegister(Request $request)
    {
        $data = $request->all();

        if ($data['password'] != $data['retype_password']) {
            return redirect()->back()->with('success', 'Mật khẩu nhập lại không khớp');
        }

        $cnt = Account::where('email', $data['email'])->count();

        if($cnt > 0)
        {
            return redirect()->back()->with('error', 'Email đã tồn tại');
        }

        $data['password'] = \Hash::make($data['password']);


        Account::create($data);

        if ($request->ajax()) {
            return response([
                'status' => 1,
                'message' => 'Success'
            ]);
        }

        return redirect()->back()->with('success', 'Thêm người dùng thành công');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function processLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        $check = Account::where('email', $email);

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

        auth('frontend')->login($check->first(), $isRemember);

        return redirect()->intended()->with('success', 'Đăng nhập thành công');

    }

    public function logout()
    {
        auth('frontend')->logout();
        return redirect()->to(url('/'));
    }
}
