@extends('frontend')

@section('content')

    <main>

        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="form_title">
                        <h3><strong><i class="icon-pencil"></i></strong>Điền thông tin liên hệ</h3>
                    </div>
                    <div class="step">

                        <div id="message-contact"></div>
                        <form method="post" action="{{ url('contact/store') }}" id="contactform" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Họ tên</label>
                                        <input type="text" class="form-control" id="name_contact" name="name" placeholder="Điền tên liên lạc">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="text" class="form-control" id="lastname_contact" name="phone" placeholder="Điền SĐT">
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" id="email_contact" name="email" class="form-control" placeholder="Điền email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input type="text" id="phone_contact" name="address" class="form-control" placeholder="Điền địa chỉ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nội dung liên hệ</label>
                                        <textarea rows="5" id="message_contact" name="message" class="form-control" placeholder="Vui lòng để lại thông tin" style="height:200px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Đính kèm file</label>
                                        <input type="file" multiple name="files[]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="submit" value="Gửi" class="btn_1" id="submit-contact">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End col-md-8 -->

                <div class="col-md-4 col-sm-4">
                    <div class="box_style_1">

                        <h4>Địa chỉ <span><i class="icon-pin pull-right"></i></span></h4>
                        <p>
                            {{ cache()->get('settings')['address'] }}
                        </p>
                        <hr>
                        <h4>Trung tâm trợ giúp <span><i class="icon-help pull-right"></i></span></h4>
                        <p>
                            Đừng ngại ngần liên lạc ngay với chúng tôi
                        </p>
                        <ul id="contact-info">
                            <li>{{ cache()->get('settings')['phone'] }}</li>
                            <li><a href="#">{{ cache()->get('settings')['email'] }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="box_style_4">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Cần <span>trợ giúp?</span></h4>
                        <a href="tel://{{ cache()->get('settings')['phone'] }}" class="phone">{{ cache()->get('settings')['phone'] }}</a>
                        <small>Thứ hai tới thứ sáu 9.00 sáng - 7.30 tối</small>
                    </div>
                </div>
                <!-- End col-md-4 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
@endsection