
function configGeolocationAndGetGeolocatedAddress(address, callback) {

    var geocoder = new google.maps.Geocoder();
    //geocoder = new google.maps.Geocoder();

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
