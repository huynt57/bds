@foreach($items as $item)
    <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.{{ $loop->index + 1 }}s">
        <div class="tour_container">
            {{--<div class="ribbon_3 popular"><span>Popular</span>--}}
            {{--</div>--}}
            <div class="img_container">
                <a href="{{ url('house/'.$item->slug.'-'.$item->id) }}">
                    <div alt="Image" style="width:360px; height:240px; background-size: cover; background-image: url('{{ $item->main_images }}');"></div>
                    <div class="short_info">
                        <i class="icon_set_1_icon-44"></i>{{ $item->type_text }}<span class="price">{{ $item->price_text }}<sup>VNĐ</sup></span>
                    </div>
                </a>
            </div>
            <div class="tour_title">
                <h3><strong>{{ $item->name }}</strong></h3>
            {{--<div class="rating">--}}
            {{--<i class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
            {{--class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
            {{--class="icon-star-empty"></i>--}}
            {{--<small>(75)</small>--}}
            {{--</div>--}}
            <!-- end rating -->
                <div class="wishlist">
                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);" onclick="addWishlist('{{ $item->id }}')">+<span
                                class="tooltip-content-flip"><span
                                    class="tooltip-back">Thêm vào mục yêu thích</span></span></a>
                </div>
                <!-- End wish list-->
            </div>
        </div>
        <!-- End box tour -->
    </div>
@endforeach