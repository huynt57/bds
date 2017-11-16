@php $houses = $items->chunk(2) @endphp
@php $cnt = -1; @endphp
@foreach($houses as $house)

    <div class="row">
        @foreach($house as $item)
            @php $cnt++; @endphp
            <div class="col-md-6 col-sm-6">
                <div class="tour_container">
                    {{--<div class="ribbon_3 popular"><span>Popular</span></div>--}}
                    <div class="img_container">
                        <a target="_blank" href="{{ url('house/'.str_slug($item->name).'-'.$item->id) }}">
                            <div style="width:360px; height:240px; background-size: cover; background-image: url('{{ $item->main_images }}');"
                                 class="img-responsive"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>{{ $item->type_text }}<span class="price">{{ $item->price_text }}<sup>VNĐ</sup></span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{ $item->name }}</strong></h3>
                        {{--<div class="rating">--}}
                        {{--<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i--}}
                        {{--class="icon-smile voted"></i><i class="icon-smile voted"></i><i--}}
                        {{--class="icon-smile"></i>--}}

                        {{--<small>(75)</small>--}}
                        {{--</div><!-- end rating -->--}}
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);" onclick="addWishlist('{{ $item->id }}')">+<span
                                        class="tooltip-content-flip"><span class="tooltip-back">Thêm vào yêu thích</span></span></a>
                        </div><!-- End wish list-->
                        <div style="margin-top: 20px" onclick="onHtmlClick('Historic', '{{ $cnt }}')" class="view_on_map">Xem trên bản đồ</div>
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-6 -->
        @endforeach

    </div><!-- End row -->
@endforeach
<hr>

<div class="text-center">
    {!! $items->appends(\Illuminate\Support\Facades\Input::except('page'))->links('frontend.pagination') !!}

</div><!-- end pagination-->