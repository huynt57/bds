var
    mapObject,
    markers = [],
    markersData = {};

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

var map = new GMaps({
    div: '#map',
    lat: -12.043333,
    lng: -77.028333
});

var marker_schools = [];

var myPlace = {lat: 25.276987, lng: 55.296249};
map.addControl({
    position: 'right_center',
    content: 'Xem trường học',
    id: 'school_map',
    type: 'get',
    style: {
        margin_top: '50px',
        height: '50px',
        width: '50px',
        padding: '1px 6px',
        border: 'solid 1px #717B87',
        background: '#fff',

    },
    events: {

        click: function () {

            var type =  $(this).attr('type');

            if(type == 'get') {
                $.ajax({
                    url: '/school',
                    data: {
                        lat: center_lat,
                        lng: center_lng,

                    },
                    dataType: 'json',
                    success: function (response) {
                        var data = response.data;

                        $('#school_map').html('Ẩn trường học').attr('type', 'remove');

                        $.each(data, function (i, item) {


                            var marker = map.addMarker({
                                lat: item.lat,
                                lng: item.lng,
                                icon: 'img/pins/' + 'Walking' + '.png',
                                click: function (e) {
                                    closeInfoBox();
                                    getInfoBox(item).open(map, this);
                                    //  map.setCenter(item.location_latitude, item.location_longitude);

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

                $(this).attr('type', 'get');

            }

        }
    }
});

map.addControl({
    position: 'right_center',
    content: 'Xem map rộng hơn',
    id: 'change_map',
    style: {
        margin_top: '80px',
        height: '50px',
        width: '50px',
        padding: '1px 6px',
        border: 'solid 1px #717B87',
        background: '#fff'
    },
    events: {
        click: function () {
            if ($(this).attr('data-check') == '1') {
                $('.content-left').removeClass('col-md-5').addClass('col-md-3');
                $('.map-right').removeClass('col-md-7').addClass('col-md-9');
                $('.tour_container').parent().removeClass('col-md-6').removeClass('col-sm-6').addClass('col-md-12');
                $('#change_map').html('Xem map nhỏ lại').attr('data-check', '2');
            } else {
                $('.content-left').removeClass('col-md-3').addClass('col-md-5');
                $('.map-right').removeClass('col-md-9').addClass('col-md-7');
                $('.tour_container').parent().removeClass('col-md-12').addClass('col-sm-6').addClass('col-md-6');
                $('#change_map').html('Xem map rộng hơn').attr('data-check', '1');
            }

        }
    }
});


$.ajax({
    url: 'get-house-marker',
    type: 'get',
    dataType: 'json',
    success: function (response) {
        markersData = response.data;
        for (var key in markersData) {
            markersData[key].forEach(function (item) {
                map.addMarker({
                    lat: item.location_latitude,
                    lng: item.location_longitude,
                    icon: 'img/pins/' + key + '.png',
                    click: function (e) {
                        closeInfoBox();
                        getInfoBox(item).open(map, this);
                        map.setCenter(item.location_latitude, item.location_longitude);

                    }
                });


            });
        }
        map.setCenter(response.center.lat, response.center.lng);
        center_lat = response.center.lat;
        center_lng = response.center.lng;

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
    google.maps.event.trigger(markers[location_type][key], "click");
}