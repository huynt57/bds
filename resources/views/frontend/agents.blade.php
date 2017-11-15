@extends('frontend')

@section('styles')
    <link href="/frontend/css/shop.css" rel="stylesheet">
    @endsection

@section('content')

    <main>

        <div class="container margin_60">
            <div class="row" >
                <div class="col-md-12" style="margin-top: 40px">
                    <div class="shop-section">

                        <!--End Sort By-->

                        <div class="row">

                            @foreach($agents as $agent)
                            <div class="shop-item col-lg-3 col-md-6 col-sm-6">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="#"><img src="/files/{{ $agent->image }}" alt="">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="product_description">
                                        <h3><a href="#">{{ $agent->name }}</a></h3>
                                        <h4><a href="#">{{ $agent->phone }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!--End Shop Item-->
                            @endforeach
                        </div>
                        <!--End Shop Item-->

                        <hr>

                        <div class="text-center">
                            {!! $agents->links('pagination') !!}
                        </div>
                        <!-- End pagination-->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End col -->
            </div>
        </div>
        <!-- End Container -->
    </main>
    <!-- End main -->
@endsection