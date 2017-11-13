@extends('frontend')

@section('content')
    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-md-7 map-right">
                <div class="map" id="map"></div>
            </div>
            <div class="col-md-5 content-left">

                @include('frontend.houses_ajax', compact('houses'));
            </div>


        </div><!-- End row-->
    </div>

@endsection