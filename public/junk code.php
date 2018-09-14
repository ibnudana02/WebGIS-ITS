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
		//console.log(data.val());
		var Locations = data.val();
		var keys = Object.keys(Locations);
		console.log(keys);
		for (var i = 0; i < keys.length; i++) {
			var k = keys[i];
			var lt = Locations[k].lat;
			var lg = Locations[k].lng;
			
		}
	}

	function errData(err){
		console.log('Error!');
		console.log(err);
	}
	var latlng = ref.on('value', function(data){
		var Locations = data.val();
		var keys = Object.keys(Locations);
	 	for (var i = 0; i < keys.length; i++) {
			var k = keys[i];
				var lat = parseFloat(Locations[k].lat);
				var lng = parseFloat(Locations[k].lng);
				console.log(lat,lng);
		}
	});
	
	var mymap  = L.map('mapid').setView([0.404431, 101.23764], 11);
	
    var marker = L.marker(latlng).addTo(mymap);
    console.log(marker);

    <script>
	// Initialize Firebase
	// TODO: Replace with your project's customized code snippet
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
		//console.log(data.val());
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
	// function gotData(data){
	// 	console.log(data.val());
	// 	var Locations = data.val();
	// 	var keys = Object.keys(Locations);
	// 	console.log(keys);
	// 	for (var i = 0; i < keys.length; i++) {
	// 		var k = keys[i];
	// 		var lat = Locations[k].lat;
	// 		var lng = Locations[k].lng;
	// 		console.log(lat, lng);
	// 	}
	// }

	// function errData(err){
	// 	console.log('Error!');
	// 	console.log(err);
	// }
	
	</script>
