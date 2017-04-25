/**
 * Created by xuezhou on 4/24/17.
 */


function initMap() {
    var uluru = {lat: 36.067133, lng: 120.366623};
    var map = new google.maps.Map(document.getElementById('Qingdao_map'), {
        zoom: 6,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });






}


