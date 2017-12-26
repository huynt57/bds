@php $houses = $items->chunk(2) @endphp
@php $cnt = -1;
if(isset($isMore) && $isMore == 2)
{
    $size = 12;
} else {
    $size = 6;
}

@endphp
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="form-group">
            <select class="form-control order" name="order_by_price" id="order_by_price">

                <option>Sắp xếp theo giá</option>
                <option value="desc">Giá giảm dần</option>
                <option value="asc">Giá tăng dần</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="form-group">
            <select class="form-control order" name="order_by_date" id="order_by_date">

                <option>Sắp xếp theo thời gian</option>
                <option value="desc">Mới nhất</option>
                <option value="asc">Cũ nhất</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 order">
        <div class="form-group">
            <select class="form-control" name="order_by_size" id="order_by_size">

                <option>Sắp xếp theo diện tích</option>
                <option value="desc">Diện tích giảm dần</option>
                <option value="asc"> Diện tích tăng dần</option>
            </select>
        </div>
    </div>
</div>
@foreach($houses as $house)

    <div class="row">
        @foreach($house as $item)
            @php $cnt++; @endphp

            @if(!empty($col))
                <div class="col-md-{{$col}} col-sm-{{$col}}">
                    @else
                        <div class="col-md-{{ $size }} col-sm-{{ $size }}">
                            @endif
                            <div class="tour_container">
                                {{--<div class="ribbon_3 popular"><span>Popular</span>--}}
                                {{--</div>--}}
                                <div class="img_container">
                                    <a href="{{ url('house/'.str_slug($item->name).'-'.$item->id) }}">
                                        <div alt="Image" class="img-ajax"
                                             style="width:auto; height:240px; background-size: cover; background-image: url('{{ $item->main_images }}');"></div>

                                        <div class="zsg-photo-card-caption"
                                             style="color: #fff; right: 6px; left: 6px; bottom: 6px; position: absolute; text-shadow: 0 0 3px rgba(0,0,0,.5);">
                                            <h4
                                                    class="zsg-photo-card-spec"><span
                                                        class="zsg-photo-card-status"
                                                        style="font-size: 15px; color: white"><span
                                                            class="zsg-icon-for-rent"></span>BĐS {{ $item->type_text }}
                                                    - {{ $item->name }}</span>
                                            </h4>
                                            <p style="margin-bottom: 0px;" class="zsg-photo-card-spec"><span
                                                        class="zsg-photo-card-price"
                                                        style="font-size: 28px; line-height: 1">{{ $item->price_text }}</span><span
                                                        class="zsg-photo-card-info"
                                                        style="font-size: 15px; margin-left: 6px;">{{ $item->beds }} p ngủ <span
                                                            class="interpunct">·</span> {{ $item->bath }} p tắm <span
                                                            class="interpunct">·</span> {{ $item->size }} m2</span></p>
                                            <p style="margin-bottom: 0px;" class="zsg-photo-card-spec"><span
                                                        class="zsg-photo-card-address"
                                                        style="font-size: 13px; color: white">{{ $item->address }}</span>
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
                        </div><!-- End col-md-6 -->
                        @endforeach

                </div><!-- End row -->
                @endforeach
    </div>
    <hr>

    <div class="text-center">
        {!! $items->appends(\Illuminate\Support\Facades\Input::except('page'))->links('frontend.pagination') !!}

    </div><!-- end pagination-->