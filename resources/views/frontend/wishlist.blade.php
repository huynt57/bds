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
                                            <img src="img/tour_box_1.jpg" alt="Image">
                                            <div class="short_info"><i class="icon_set_1_icon-4"></i>Museums</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="tour_list_desc">
                                        <div class="rating"><i class="icon-smile voted"></i><i
                                                    class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i
                                                    class="icon-smile  voted"></i><i class="icon-smile"></i>
                                            <small>(75)</small>
                                        </div>
                                        <h3><strong>Arch Triomphe</strong> tour</h3>
                                        <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat
                                            sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis
                                            inciderint no, eos in elit dicat.....</p>
                                        <ul class="add_info">
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Schedule</h4>
                                                        <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                        <br>
                                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                        <br>
                                                        <strong>Sunday</strong> <span
                                                                class="label label-danger">Closed</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Address</h4> Musée du Louvre, 75058 Paris - France
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Languages</h4> English - French - Chinese - Russian -
                                                        Italian
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Parking</h4> 1-3 Rue Elisée Reclus
                                                        <br> 76 Rue du Général Leclerc
                                                        <br> 8 Rue Caillaux 94923
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tooltip_styled tooltip-effect-4">
                                                    <span class="tooltip-item"><i class="icon_set_1_icon-25"></i></span>
                                                    <div class="tooltip-content">
                                                        <h4>Transport</h4>
                                                        <strong>Metro: </strong>Musée du Louvre station (line 1)
                                                        <br>
                                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95
                                                        <br>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <div class="price_list">
                                        <div><sup>$</sup>39*<span class="normal_price_list">$99</span>
                                            <small>*Per person</small>
                                            <p><a href="single_tour.html" class="btn_1">Details</a>
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
                        {!! $items->link('pagination') !!}
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
