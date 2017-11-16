@extends('frontend')

@section('content')
    <main>
        <section id="hero" class="login">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div id="login">
                            <div class="text-center"><img src="img/logo_sticky.png" alt="Image" data-retina="true"></div>
                            <hr>
                            <form method="post" action="{{ url('process-register') }}">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class=" form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class=" form-control" name="password" id="password1" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label>Confirm password</label>
                                    <input type="password" class=" form-control" name="retype_password" id="password2" placeholder="Xác nhận mật khẩu">
                                </div>
                                <div id="pass-info" class="clearfix"></div>
                                <button class="btn_full">Đăng ký tài khoản</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection