var map;
var tripUniqueId = tracking_details.unique_id;
var tripType = tracking_details.status;
var origin = {
    lat: tracking_details.trip.from.coordinators.lat, 
    lng: tracking_details.trip.from.coordinators.lon
};
var destination = { 
    lat: tracking_details.trip.to.coordinators.lat,
    lng: tracking_details.trip.to.coordinators.lon
};
var tripPath;

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: origin,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 15
    });

    createMarkers();

    tripPath = new google.maps.Polyline({
        geodesic: true,
        strokeColor: '#98928c',
        strokeOpacity: 0.8,
        strokeWeight: 6,
    });

    if (tripType=='ongoing' || tripType=='completed') {
        drawCompletedPath();
        if (tripType=='ongoing') { drawLivePath(); }
    } else {
        drawDirection();
    }
}

/* Draw Origin & Destination markers */
function createMarkers(){
    // origin marker
    var originMarker = new google.maps.Marker({
        position: origin,
        icon: {
            path: google.maps.SymbolPath.CIRCLE,
            scale: 5
        },
        map: map
    });
    attachPopUpMessage(originMarker, '<b>Pickup</b> :'+tracking_details.trip.from.address);

    // destination marker
    var destinationMarker = new google.maps.Marker({
        position: destination,
        animation: google.maps.Animation.DROP,
        map: map
    });
    attachPopUpMessage(destinationMarker, '<b>Destination</b> :'+tracking_details.trip.to.address);
}

/* Draw direction (from pickup to destination) on Map */
function drawDirection() {
    var directionsService = new google.maps.DirectionsService();
    var directionsDisplay = new google.maps.DirectionsRenderer({
        suppressMarkers: true,
        polylineOptions: { 
            strokeColor: "#Black",
            strokeOpacity: 0.8,
            strokeWeight: 6,
        },
    });
    directionsDisplay.setMap(map);

    var request = {
        origin: origin,
        destination: destination,
        optimizeWaypoints: true,        
        travelMode: 'DRIVING'
    };

    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
        }
    });
}

/* Draw location history on Map */
function drawCompletedPath() {
    var completedPath = [];
    for (var i = 0; i < tracking_details.trip_path_history.length; i++) {
        completedPath.push({
            lat: Number(tracking_details.trip_path_history[i].latitude),
            lng: Number(tracking_details.trip_path_history[i].longitude)
        });
    }
    tripPath.setPath(completedPath);
    tripPath.setMap(map);
}

/* Ongoing Trip : Live Update */
function drawLivePath() {

    console.log(origin);

    // current vehicle marker
    var vehicleLat = (tracking_details.trip_path_history.length>0) ? tracking_details.trip_path_history[tracking_details.trip_path_history.length - 1].latitude : origin.lat;
    var vehicleLon = (tracking_details.trip_path_history.length>0) ? tracking_details.trip_path_history[tracking_details.trip_path_history.length - 1].longitude : origin.lng;
    
    console.log(vehicleLat+', '+vehicleLon);
    var image = 'http://heavygari.com/website/images/marker.png';
    var vehicleMarker = new google.maps.Marker({
        position: {
            lat: Number(vehicleLat),
            lng: Number(vehicleLon)
        },
        map: map,
        icon : image
    });
    var title = '<b>Vehicle</b> :'+tracking_details.vehicle.number_plate+' ('+tracking_details.vehicle_type.title+')'+
    '<br /><b>Driver</b> :'+tracking_details.driver.name;
    attachPopUpMessage(vehicleMarker, title);

    /* When we get any update from driver app, update the map and marker */
    socket.on('liveTripUpdates', function(data) {
        if (data.tripId == tripUniqueId) { 
            var lastLatlng = new google.maps.LatLng(data.latitude, data.longitude);
            tripPath.getPath().push(lastLatlng);
            vehicleMarker.setPosition(lastLatlng);
            map.setCenter(lastLatlng);
            //map.setZoom(14);
            
            $('#last_update').text('last updated at : '+new Date());
        }
    });
}

/* Attaches an info window to a marker with the provided message */
function attachPopUpMessage(marker, message) {
    var infowindow = new google.maps.InfoWindow({
        content: message
    });
    marker.addListener('click', function() {
        infowindow.open(marker.get('map'), marker);
    });
    infowindow.open(marker.get('map'), marker);
}