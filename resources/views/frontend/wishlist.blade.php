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

                    @php $col = 4; @endphp
                    @include('frontend.houses_ajax', compact('items', 'col'));

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
