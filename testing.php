<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Verify Company's Address</h3>
    <p> Some nice text explaining what to do here </p>
    <input type="text" class="form-control" id="companyAddressVerificationId" placeholder="Varify your Address">
    <div id="map"></div>

    <?php include "core/firebase-includes.php"; ?>
    <script type="text/javascript" src="js/location-service/google-geo-location.js">

    </script>
    <script>


     function getAddess(user) {

        var userId = user.uid;
        firebase.database().ref('/merchant/' + userId).once('value').then(function(snapshot) {

            //console.log(snapshot.val().location);

            document.getElementById("companyAddressVerificationId").value = snapshot.val().fullname + ", " + snapshot.val().location;

            configGeolocationAndGetGeolocatedAddress(snapshot.val().location, function(coordinates) {

                console.log(coordinates);

                var uluru = {lat: coordinates.lat(), lng: coordinates.lng()};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 14,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });

            });
        });
     }


      function initMap() {


          firebase.auth().onAuthStateChanged(function(user) {

              if (user) {
                  getAddess(user);
              }

          });

        // var uluru = {lat: -25.363, lng: 131.044};
        // var map = new google.maps.Map(document.getElementById('map'), {
        //   zoom: 5,
        //   center: uluru
        // });
        // var marker = new google.maps.Marker({
        //   position: uluru,
        //   map: map
        // });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApjP_pSamKpO3Sdj0C8GDSkePyFIqTY4Q&callback=initMap">
    </script>
  </body>
</html>
