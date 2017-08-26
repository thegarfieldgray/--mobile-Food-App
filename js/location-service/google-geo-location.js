
// all pages that include this file should
// have jQuery imvluded above it as well

function configGeolocationAndGetGeolocatedAddress(address, callback) {

    var geocoder = new google.maps.Geocoder();
    //var address = "20 NY-27A, Southampton, NY 11968";

    geocoder.geocode({ 'address': address }, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
            //console.log("Latitiude: " + results[0].geometry.location.lat() + "Longitude: " + results[0].geometry.location.lng());
            if (typeof callback === "function") {
                callback(results[0].geometry.location);
            }
        }
    });
}


function getTheAddressFromCoordinates(lat, lng, callback){

    var geocoder = new google.maps.Geocoder();
    var latlng = {lat: lat, lng: lng};

    geocoder.geocode({'location': latlng}, function(results, status) {
         if (status === 'OK') {
           if (results[0]) {
               //console.log(results[0]);
               callback(results[0].formatted_address);
           }
       }
   });
}

// http://maps.googleapis.com/maps/api/geocode/json?latlng=44.4647452,7.3553838&sensor=true
