Waves.attach('.btn-sign-in-center', ['waves-float'],['waves-button']);
Waves.attach('.btn-sign-up-center', ['waves-float'],['waves-button']);
Waves.attach('.submit-map',  ['waves-float'],['waves-button']);
Waves.init();


function initialize() {
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: {lat: 18.521053, lng: -77.860226}
});

var geocoder = new google.maps.Geocoder();

document.getElementById('submit-map').addEventListener('click', function() {
  geocodeAddress(geocoder, map);
  });
};

function geocodeAddress(geocoder, resultsMap) {
  var address = document.getElementById('companyAddressInputLabelId').value;
    geocoder.geocode({'companyAddressInputLabelId': address}, function(results, status) {
      if (status === 'OK') {
        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location
        });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
        }
    });
};


/*
var map;
//use geocoder
function initialize() {
  var myLatlng = new google.maps.LatLng(18.521053,-77.860226);
  console.log(myLatlng);
  var myOptions = {
    zoom: 4,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map"), myOptions);

  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng);
  });
}

function placeMarker(location) {
  var marker = new google.maps.Marker({
      position: location, 
      map: map
  });

  map.setCenter(location);
}

function updateAddressField(){
    var addField = document.getElementById("companyAddressInputLabelId");
        addField.value = "testing.."; //pointers      
}
*/

function navX(x) {
	x.classList.toggle("change");
};

$(document).ready(function(){
    $("#signup").click(function(){
    	document.getElementById("signin-content").style.display="none";
        document.getElementById("signup").style.color="#fd5c4c";
        document.getElementById("signin").style.color="black";
    		$("#signup-content").fadeIn('slow');
    		$(".contain").animate({height:'600'});

    });


    $("#signin").click(function(){
    	document.getElementById("signup-content").style.display="none";
        document.getElementById("signin").style.color="#fd5c4c";
         document.getElementById("signup").style.color="black";
    		  $("#signin-content").fadeIn('slow');
    		    $(".contain").animate({height:'550'});	
    });
});