<!DOCTYPE html>
<head>

<script language='javascript' >
var txt='Integrated Transportation System Bus DAMRI   ';
var speed=300;
var refresh=null;
function action() { document.title=txt;
txt=txt.substring(1,txt.length)+txt.charAt(0);
refresh=setTimeout("action()",speed);}action();</script>
<title>    </title>

<style>
  html, body,#map{
    height: 100%;
    margin: 0px;
    padding: 0px;
}
</style>
</head>
<body>

<script src= "https://www.gstatic.com/firebasejs/3.3.2/firebase.js"></script>
<script>
var config = {
    apiKey: "AIzaSyD6HMcCufi3jBdsUprRhs0NTcW6_YzuyFw",
    authDomain: "skripsi-194003.firebaseapp.com",
    databaseURL: "https://skripsi-194003.firebaseio.com",
    storageBucket: "skripsi-194003.appspot.com",
  };
  firebase.initializeApp(config);
</script>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script>
var rootRef = firebase.database().ref("Locations");

rootRef.on("child_added", snap =>{

var latitude = snap.child("lat").val();
var longitude = snap.child("lng").val();
var email = snap.child("email").val();
initMap(latitude,longitude,email);

});
</script>

<div id="map"></div>
<script>

function initMap(latitude,longitude,email){

//alert('Values have been gathered click ok to show map !! Welcome Taj , from Arslan !! :PP');
var options = {
    zoom: 11,
        // center: {lat: 31.5546,lng:74.3572}
        center: {lat: 0.404431,lng: 101.23764}
}
var map = new google.maps.Map(document.getElementById('map'), options);

//show an alert to check if the values are being fetched from firebase database stored in latitude and longitude.
  // alert (latitude + " " + longitude);

var marker = new google.maps.Marker({
        // position:{lat: latitude, lng: longitude},
        position:{lat: parseFloat(latitude), lng: parseFloat(longitude)},
        map:map,
        title: 'Bus DAMRI'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:"<h4>" + email +"</h4>"
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
}
    </script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0w2dY7OZvF6nBvnLLxzAzXi05l_8jc-o">
    </script>
</body>
</html>