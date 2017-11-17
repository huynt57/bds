@extends('frontend')

@section('content')
    <main style="margin-top: 30px">
        <div class="container">
            <div class="row">

                @foreach($regions as $region)
                    <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s"
                         style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                        <div class="tour_container">
                            <div class="img_container">
                                <a href="{{ url('map?city_id='.$region->region_id) }}">
                                    <img src="{{ $region->image }}" class="img-responsive" alt=""
                                         style="height: 239px; width: 358px;">

                                </a>
                            </div>
                            <div class="title-over">
                                <h3 class="title-h"><strong>{{ $region->name }}</strong></h3>

                            </div>
                        </div><!-- End box tour -->
                    </div><!-- End col-md-4 -->
                @endforeach
            </div>
        </div>
    </main>
@endsection