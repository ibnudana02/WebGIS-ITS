var markers = [];
init();

var config = {
	apiKey: "AIzaSyD6HMcCufi3jBdsUprRhs0NTcW6_YzuyFw",
	authDomain: "skripsi-194003.firebaseapp.com",
	databaseURL: "https://skripsi-194003.firebaseio.com",
	storageBucket: "skripsi-194003.appspot.com",
};
	firebase.initializeApp(config);
	database = firebase.database();

	var ref = database.ref('Locations');
	ref.on('value', gotData, errData);

	function gotData(data){
		var Locations = data.val();
		var keys = Object.keys(Locations);
		console.log(keys);
		for (var i = 0; i < keys.length; i++) {
			var k = keys[i];
			var lt = Locations[k].lat;
			var lg = Locations[k].lng;
			console.log(lt,lg);
		}
	}

	function errData(err){
		console.log('Error!');
		console.log(err);
	}
