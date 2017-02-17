/**
 * Created by xuezhou on 2/16/17.
 */


/**
 * Created by xuezhou on 2/15/17.
 */


function initMap() {
    var uluru = {lat: 42.367, lng: -71.080};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}



