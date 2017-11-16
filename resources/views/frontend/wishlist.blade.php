@extends('frontend')

@section('content')
    <main style="margin-bottom: 353px;">
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">

            <div class="row">
                <!--End aside -->
                <div class="col-lg-12 col-md-12s">

                    @foreach($items as $item)
                        <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s"
                             style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="wishlist_close">-</div>
                                    <div class="img_list">
                                        <a href="single_tour.html">
                                            <div class="ribbon popular"></div>
                                            <img src="{{ $item->main_images }}" alt="Image">
                                            <div class="short_info"><i class="icon_set_1_icon-4"></i>Museums</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tour_list_desc">
                                        <h3>{{ $item->name }}</h3>
                                        <p>{{ \Illuminate\Support\Str::words($item->desc, 50) }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="price_list">
                                        <div><span>{{ $item->price_text }}
                                                VNĐ</span>
                                            <small></small>
                                            <p><a href="{{ url('house/'.str_slug($item->name).'-'.$item->id) }}" class="btn_1">Chi tiết</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End strip -->
                    @endforeach

                    <hr>

                    <div class="text-center">
                        {!! $items->links('pagination') !!}
                    </div>
                    <!-- end pagination-->

                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
@endsection
