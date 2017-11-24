@foreach($items as $item)
    <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.{{ $loop->index + 1 }}s">
        <div class="tour_container">
            {{--<div class="ribbon_3 popular"><span>Popular</span>--}}
            {{--</div>--}}
            <div class="img_container">
                <a href="{{ url('house/'.str_slug($item->name).'-'.$item->id) }}">
                    <div alt="Image"
                         style="width:360px; height:240px; background-size: cover; background-image: url('{{ $item->main_images }}');"></div>

                    <div class="zsg-photo-card-caption"
                         style="color: #fff; right: 6px; left: 6px; bottom: 6px; position: absolute; text-shadow: 0 0 3px rgba(0,0,0,.5);"><h4
                                class="zsg-photo-card-spec"><span
                                    class="zsg-photo-card-status" style="font-size: 15px; color: white"><span
                                        class="zsg-icon-for-rent"></span>BĐS {{ $item->type_text }} - {{ $item->name }}</span>
                        </h4>
                        <p style="margin-bottom: 0px;" class="zsg-photo-card-spec"><span class="zsg-photo-card-price"
                                                                                         style="font-size: 28px; line-height: 1">{{ $item->price_text }}</span><span
                                    class="zsg-photo-card-info" style="font-size: 15px; margin-left: 6px;">{{ $item->beds }} p <span
                                        class="interpunct">·</span> {{ $item->bath }} pt <span
                                        class="interpunct">·</span> {{ $item->size }} m2</span></p>
                        <p style="margin-bottom: 0px;" class="zsg-photo-card-spec"><span
                                    class="zsg-photo-card-address" style="font-size: 13px; color: white">{{ $item->address }}</span>
                        </p></div>
                </a>
                <div class="wishlist">
                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);"
                       onclick="addWishlist('{{ $item->id }}')">+</a>
                </div>
            </div>
            {{--<div class="tour_title">--}}
                {{--<h3 style="font-size: 15px"><strong>{{ $item->name }}</strong></h3>--}}
            {{--<div class="rating">--}}
            {{--<i class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
            {{--class="icon-star voted"></i><i class="icon-star voted"></i><i--}}
            {{--class="icon-star-empty"></i>--}}
            {{--<small>(75)</small>--}}
            {{--</div>--}}
            {{--<!-- end rating -->--}}

                {{--<!-- End wish list-->--}}
            {{--</div>--}}

        </div>
        <!-- End box tour -->
    </div>
@endforeach