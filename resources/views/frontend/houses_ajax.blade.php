@php $houses = $items->chunk(2) @endphp
@foreach($houses as $house)
    <div class="row">
        @foreach($house as $item)
            <div class="col-md-6 col-sm-6">
                <div class="tour_container">
                    {{--<div class="ribbon_3 popular"><span>Popular</span></div>--}}
                    <div class="img_container">
                        <a href="{{ url('house/view/'.$item->slug) }}">
                            <div style="width:360px; height:240px; background-size: cover; background-image: url('{{ $item->main_images }}');"
                                 class="img-responsive"></div>
                            <div class="short_info">
                                <i class="icon_set_1_icon-44"></i>Historic Buildings<span class="price"><sup>$</sup>45</span>
                            </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>{{ $item->name }}</strong></h3>
                        <div class="rating">
                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile voted"></i><i class="icon-smile voted"></i><i
                                    class="icon-smile"></i>
                            <small>(75)</small>
                        </div><!-- end rating -->
                        <div class="wishlist">
                            <a class="tooltip_flip tooltip-effect-1" href="#">+<span
                                        class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                        </div><!-- End wish list-->
                        <div onclick="onHtmlClick('Historic', 0)" class="view_on_map">View on map</div>
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-6 -->
        @endforeach
    </div><!-- End row -->
@endforeach