var
    mapObject,
    markers = [],
    markersData = {};

var is_more ='';

var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(48.865633, 2.321236),
    mapTypeId: google.maps.MapTypeId.ROADMAP,

    mapTypeControl: false,
    mapTypeControlOptions: {
        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
        position: google.maps.ControlPosition.LEFT_CENTER
    },
    panControl: true,
    panControlOptions: {
        position: google.maps.ControlPosition.TOP_RIGHT
    },
    zoomControl: true,
    zoomControlOptions: {
        style: google.maps.ZoomControlStyle.LARGE,
        position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
    scrollwheel: false,
    scaleControl: false,
    scaleControlOptions: {
        position: google.maps.ControlPosition.LEFT_CENTER
    },
    streetViewControl: true,
    streetViewControlOptions: {
        position: google.maps.ControlPosition.RIGHT_BOTTOM
    },
};


var marker;
var center_lat;
var center_lng;
//mapObject = new google.maps.Map(document.getElementById('map'), mapOptions);

function get_house_by_center(lat, lng, radius) {

    var current_url = window.location.href;
    var url = current_url.replace('map', 'map-ajax');
    $.ajax({
        url: url,
        cache: false,
        data: {
            lat: lat,
            lng: lng,
            radius: radius,
            is_more : $('#change_map').attr('data-check')

        },
        beforeSend: function () {
            $('.content-left').addClass('ht-on-loading');
        },
        dataType: 'json',
        success: function (response) {
            markers = [];
            $('.content-left').removeClass('ht-on-loading').html(response.items);

            markersData = response.markers.data;
            for (var key in markersData) {
                markersData[key].forEach(function (item) {
                    var marker = map.addMarker({
                        lat: item.location_latitude,
                        lng: item.location_longitude,
                        icon: 'img/pins/' + key + '.png',
                        click: function (e) {
                            map.setCenter(item.location_latitude, item.location_longitude);

                        },
                        infoWindow: {
                            content: item.info_window
                        }
                    });
                    markers.push(marker);

                });
            }
            center_lat = response.markers.center.lat;
            center_lng = response.markers.center.lng;
        }
    });
}

function getBoundsRadius(bounds, c_lat, c_lng) {
    // r = radius of the earth in km
    var r = 6378.8
    // degrees to radians (divide by 57.2958)
    var ne_lat = bounds.getNorthEast().lat() / 57.2958
    var ne_lng = bounds.getNorthEast().lng() / 57.2958
    var c_lat = bounds.getCenter().lat() / 57.2958
    var c_lng = bounds.getCenter().lng() / 57.2958
    // distance = circle radius from center to Northeast corner of bounds
    var r_km = r * Math.acos(
            Math.sin(c_lat) * Math.sin(ne_lat) +
            Math.cos(c_lat) * Math.cos(ne_lat) * Math.cos(ne_lng - c_lng)
        );
    return r_km // radius in meters
}
var element = document.getElementById('map');
if (typeof(element) != 'undefined' && element != null) {
    var map = new GMaps({
        div: '#map',
        zoomControl: true,
        zoomControlOpt: {
            position: 'TOP_RIGHT'
        },
        lat: -12.043333,
        lng: -77.028333,

        zoom_changed: function (e) {

            var lat = e.center.lat();
            var lng = e.center.lng();
            var zoom = e.zoom;
            var radius = getBoundsRadius(e.getBounds(), lat, lng);
            get_house_by_center(lat, lng, radius);
        },
        dragend: function (e) {

            var lat = e.center.lat();
            var lng = e.center.lng();
            var zoom = e.zoom;
            var radius = getBoundsRadius(e.getBounds(), lat, lng);
            get_house_by_center(lat, lng, radius);

        }
    });


    var marker_schools = [];

    map.addControl({
        position: 'right_center',
        content: '<i class="fa fa-graduation-cap"></i>',
        id: 'school_map',
        classes: 'btn-map unselected',
        type: 'get',
        style: {
            color: '#444',
            border: '1px solid #CCC',
            background: '#fff',
            'box-shadow': '0 0 5px -1px rgba(0,0,0,0.2)',
            cursor: 'pointer',
            'vertical-align': 'middle',
            'padding': '10px',
            'text-align': 'center',
            'font-size': '20px',
            'border-radius': '7px'
        },
        events: {

            click: function () {

                var type = $(this).attr('type');

                if (type == 'get' || typeof (type) == 'undefined') {
                    $.ajax({
                        url: '/school',
                        cache: false,
                        data: {
                            lat: center_lat,
                            lng: center_lng,

                        },
                        dataType: 'json',
                        success: function (response) {
                            var data = response.data;

                            $('#school_map').attr('type', 'remove').removeClass('unselected').addClass('selected');

                            $.each(data, function (i, item) {


                                var marker = map.addMarker({
                                    lat: item.lat,
                                    lng: item.lng,
                                    icon: '/images/school.png',
                                    infoWindow: {
                                        content: item.name
                                    }
                                });

                                marker_schools.push(marker);
                            });
                        }
                    });
                } else {

                    marker_schools.forEach(function (marker) {
                        marker.setMap(null);
                    });

                    $(this).attr('type', 'get').addClass('unselected').removeClass('selected');

                }

            }
        }
    });

    map.addControl({
        position: 'right_center',
        content: '<i class="fa fa-chevron-right" aria-hidden="true"></i> Thêm map',
        id: 'change_map',
        style: {
            color: '#444',
            border: '1px solid #CCC',
            background: '#fff',
            'box-shadow': '0 0 5px -1px rgba(0,0,0,0.2)',
            cursor: 'pointer',
            'vertical-align': 'middle',
            'padding': '10px',
            'text-align': 'center',
            'font-size': '16px',
            'border-radius': '7px',
            'margin-top': '20px'
        },

        events: {
            click: function () {
                is_more = $(this).attr('data-check');
                if ($(this).attr('data-check') == '1' || typeof ($(this).attr('data-check')) == 'undefined') {
                    $('.content-left').removeClass('col-md-5').addClass('col-md-3');
                    $('.map-right').removeClass('col-md-7').addClass('col-md-9');
                    $('.img-ajax').addClass('image-container');
                    $('.tour_container').parent().removeClass('col-md-6').removeClass('col-sm-6').addClass('col-md-12');
                    $('#change_map').html('<i class="fa fa-chevron-left" aria-hidden="true"></i> Nhỏ map').attr('data-check', '2');
                    is_more = '2';
                    reIntilizeMap();
                } else {
                    $('.content-left').removeClass('col-md-3').addClass('col-md-5');
                    $('.map-right').removeClass('col-md-9').addClass('col-md-7');
                    $('.img-ajax').removeClass('image-container');
                    $('.tour_container').parent().removeClass('col-md-12').addClass('col-sm-6').addClass('col-md-6');
                    $('#change_map').html('<i class="fa fa-chevron-right" aria-hidden="true"></i> Thêm map').attr('data-check', '1');
                    is_more = '1';
                    reIntilizeMap();
                }

            }
        }
    });


    $.ajax({
        url: window.location.href,
        type: 'get',
        dataType: 'json',
        cache: false,
        success: function (response) {
            markers = [];
            markersData = response.markers.data;
            for (var key in markersData) {
                markersData[key].forEach(function (item) {
                    var marker = map.addMarker({
                        lat: item.location_latitude,
                        lng: item.location_longitude,
                        icon: 'img/pins/' + key + '.png',
                        click: function (e) {
                            map.setCenter(item.location_latitude, item.location_longitude);

                        },
                        infoWindow: {
                            content: item.info_window
                        }
                    });

                    markers.push(marker);

                });
            }
            center_lat = response.markers.center.lat;
            center_lng = response.markers.center.lng;
            if (center_lat != -1 && center_lng != -1) {
                map.setCenter(response.markers.center.lat, response.markers.center.lng);
            }

        }
    });


    function hideAllMarkers() {
        for (var key in markers)
            markers[key].forEach(function (marker) {
                marker.setMap(null);
            });
    };

    function toggleMarkers(category) {
        hideAllMarkers();
        closeInfoBox();

        if ('undefined' === typeof markers[category])
            return false;
        markers[category].forEach(function (marker) {
            marker.setMap(mapObject);
            marker.setAnimation(google.maps.Animation.DROP);

        });
    };

    function closeInfoBox() {
        $('div.infoBox').remove();
    };

    function getInfoBox(item) {
        return new InfoBox({
            content: '<div class="marker_info_2">' +
            '<img style="width: 240px; height: 140px" src="' + item.map_image_url + '" alt="Image"/>' +
            '<h3>' + item.name_point + '</h3>' +
            '<span>' + item.description_point + '</span>' +
            '<div class="marker_tools">' +
            '<form action="http://maps.google.com/maps" method="get" target="_blank" style="display:inline-block""><input name="saddr" value="' + item.get_directions_start_address + '" type="hidden"><input type="hidden" name="daddr" value="' + item.location_latitude + ',' + item.location_longitude + '"><button type="submit" value="Get directions" class="btn_infobox_get_directions">Directions</button></form>' +
            '<a href="tel://' + item.phone + '" class="btn_infobox_phone">' + item.phone + '</a>' +
            '</div>' +
            '<a href="' + item.url_point + '" class="btn_infobox">Details</a>' +
            '</div>',
            disableAutoPan: false,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(10, 125),
            closeBoxMargin: '5px -20px 2px 2px',
            closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
            isHidden: false,
            alignBottom: true,
            pane: 'floatPane',
            enableEventPropagation: true
        });
    };

    function onHtmlClick(location_type, key) {
        google.maps.event.trigger(markers[key], "click");
    }

    function reIntilizeMap()
    {
        var content = '';
        console.log(is_more);
        if (is_more == '2') {
            content = '<i class="fa fa-chevron-left" aria-hidden="true"></i> Nhỏ map';
        } else {
            content = '<i class="fa fa-chevron-right" aria-hidden="true"></i> Thêm map';
        }
        var map = new GMaps({
            div: '#map',
            zoomControl: true,
            zoomControlOpt: {
                position: 'TOP_RIGHT'
            },
            lat: -12.043333,
            lng: -77.028333,

            zoom_changed: function (e) {

                var lat = e.center.lat();
                var lng = e.center.lng();
                var zoom = e.zoom;
                var radius = getBoundsRadius(e.getBounds(), lat, lng);
                get_house_by_center(lat, lng, radius);
            },
            dragend: function (e) {

                var lat = e.center.lat();
                var lng = e.center.lng();
                var zoom = e.zoom;
                var radius = getBoundsRadius(e.getBounds(), lat, lng);
                get_house_by_center(lat, lng, radius);

            }
        });


        var marker_schools = [];

        map.addControl({
            position: 'right_center',
            content: '<i class="fa fa-graduation-cap"></i>',
            id: 'school_map',
            classes: 'btn-map unselected',
            type: 'get',
            style: {
                color: '#444',
                border: '1px solid #CCC',
                background: '#fff',
                'box-shadow': '0 0 5px -1px rgba(0,0,0,0.2)',
                cursor: 'pointer',
                'vertical-align': 'middle',
                'padding': '10px',
                'text-align': 'center',
                'font-size': '20px',
                'border-radius': '7px'
            },
            events: {

                click: function () {

                    var type = $(this).attr('type');

                    if (type == 'get' || typeof (type) == 'undefined') {
                        $.ajax({
                            url: '/school',
                            cache: false,
                            data: {
                                lat: center_lat,
                                lng: center_lng,

                            },
                            dataType: 'json',
                            success: function (response) {
                                var data = response.data;

                                $('#school_map').attr('type', 'remove').removeClass('unselected').addClass('selected');

                                $.each(data, function (i, item) {


                                    var marker = map.addMarker({
                                        lat: item.lat,
                                        lng: item.lng,
                                        icon: '/images/school.png',
                                        infoWindow: {
                                            content: item.name
                                        }
                                    });

                                    marker_schools.push(marker);
                                });
                            }
                        });
                    } else {

                        marker_schools.forEach(function (marker) {
                            marker.setMap(null);
                        });

                        $(this).attr('type', 'get').addClass('unselected').removeClass('selected');

                    }

                }
            }
        });

        map.addControl({
            position: 'right_center',
            content: content,
            id: 'change_map',
            style: {
                color: '#444',
                border: '1px solid #CCC',
                background: '#fff',
                'box-shadow': '0 0 5px -1px rgba(0,0,0,0.2)',
                cursor: 'pointer',
                'vertical-align': 'middle',
                'padding': '10px',
                'text-align': 'center',
                'font-size': '16px',
                'border-radius': '7px',
                'margin-top': '20px'
            },

            events: {
                click: function () {
                    if (is_more == '1' || typeof (is_more) == 'undefined') {
                        $('.content-left').removeClass('col-md-5').addClass('col-md-3');
                        $('.map-right').removeClass('col-md-7').addClass('col-md-9');
                        $('.img-ajax').addClass('image-container');
                        $('.tour_container').parent().removeClass('col-md-6').removeClass('col-sm-6').addClass('col-md-12');
                        $('#change_map').html('<i class="fa fa-chevron-left" aria-hidden="true"></i> Nhỏ map').attr('data-check', '2');
                        is_more = '2';
                    } else {
                        $('.content-left').removeClass('col-md-3').addClass('col-md-5');
                        $('.map-right').removeClass('col-md-9').addClass('col-md-7');
                        $('.img-ajax').removeClass('image-container');
                        $('.tour_container').parent().removeClass('col-md-12').addClass('col-sm-6').addClass('col-md-6');
                        $('#change_map').html('<i class="fa fa-chevron-right" aria-hidden="true"></i> Thêm map').attr('data-check', '1');
                        is_more = '1';
                    }

                }
            }
        });


        $.ajax({
            url: window.location.href,
            type: 'get',
            dataType: 'json',
            cache: false,
            success: function (response) {
                markers = [];
                markersData = response.markers.data;
                for (var key in markersData) {
                    markersData[key].forEach(function (item) {
                        var marker = map.addMarker({
                            lat: item.location_latitude,
                            lng: item.location_longitude,
                            icon: 'img/pins/' + key + '.png',
                            click: function (e) {
                                map.setCenter(item.location_latitude, item.location_longitude);

                            },
                            infoWindow: {
                                content: item.info_window
                            }
                        });

                        markers.push(marker);

                    });
                }
                center_lat = response.markers.center.lat;
                center_lng = response.markers.center.lng;
                if (center_lat != -1 && center_lng != -1) {
                    map.setCenter(response.markers.center.lat, response.markers.center.lng);
                }

            }
        });
    }
}