var locationRef = firebase.database().ref().child("Locations");

locationRef.on("child_added", snap => {
  var lat = snap.child("lat").val();
  var lng = snap.child("lng").val();
});
