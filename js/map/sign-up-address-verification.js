
var map;
var mainMarker;
var originalCoordinates;

// GUI Components
var addressInputField = addressInputField = document.getElementById("companyAddressInputLabelId");

 function initMap() {
     firebase.auth().onAuthStateChanged(function(user) {
         if (user) {
             getAddessFromFirebase(user);
         }
     });
 }

function getAddessFromFirebase(user) {

   var userId = user.uid;
   firebase.database().ref('/merchant/' + userId).once('value').then(function(snapshot) {

       addressInputField.value = snapshot.val().fullname + ", " + snapshot.val().location;

       // This funciton is in the
       // "js/location-service/google-geo-location.js" file
       configGeolocationAndGetGeolocatedAddress(snapshot.val().location, function(coordinates) {

           console.log(coordinates);

           var coordinatesFromStringAddress = {lat: coordinates.lat(), lng: coordinates.lng()};
           map = new google.maps.Map(document.getElementById('map'), {
             zoom: 14,
             center: coordinatesFromStringAddress
           });

           originalCoordinates = coordinatesFromStringAddress;

           addEventListenerToMap(map);

           mainMarker = new google.maps.Marker({
             position: coordinatesFromStringAddress,
             map: map
           });

       });
   });
}

function addEventListenerToMap(map) {
    google.maps.event.addListener(map, "click", function (event) {

        var latitude = event.latLng.lat();
        var longitude = event.latLng.lng();
        console.log( latitude + ', ' + longitude );

        centerMapToCoordinates(latitude, longitude);

        addMarkerAndRemoveOldCoordinates(latitude, longitude);
    });
}

function recenterMapToOriginalAddress() {
    centerMapToCoordinates(originalCoordinates.lat, originalCoordinates.lng);
    addMarkerAndRemoveOldCoordinates(originalCoordinates.lat, originalCoordinates.lng);
}

function addMarkerAndRemoveOldCoordinates(lat, lng) {
    var newMarker = new google.maps.Marker({
        position: new google.maps.LatLng(lat,lng),
        map: map
    });

    // This funciton is in the
    // "js/location-service/google-geo-location.js" file
    getTheAddressFromCoordinates(lat, lng, function(address){
        console.log(address);
        addressInputField.value = address;
    });

    removeMarker(mainMarker);

    mainMarker = newMarker;
}

function removeMarker(marker) {
    marker.setMap(null);
}

function centerMapToCoordinates(latitude, longitude){
    var coordinates = new google.maps.LatLng(latitude,longitude);
    if(coordinates){
        map.panTo(coordinates);
    }
}



// function updateAddressField(marker){
//
//     //removeMarker();
//
//     google.maps.event.addListener(marker, "click", function (event) {
//         var latitude = event.latLng.lat();
//         var longitude = event.latLng.lng();
//         console.log( latitude + ', ' + longitude );
//
//         console.log("testing...");
//
//
//         radius = new google.maps.Circle({map: map,
//             radius: 100,
//             center: event.latLng,
//             fillColor: '#777',
//             fillOpacity: 0.1,
//             strokeColor: '#AA0000',
//             strokeOpacity: 0.8,
//             strokeWeight: 2,
//             draggable: true,    // Dragable
//             editable: true      // Resizable
//         });
//     }); //end addListener
//
// }
