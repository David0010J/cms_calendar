
// var root = '{{$_SERVER['DOCUMENT_ROOT']}}';
var config = {
	apiKey: "AIzaSyAq7s14XvSXgelBedC4RSlsEmIOzg9sEFo",
	authDomain: "smartoffice-88c82.firebaseapp.com",
	databaseURL: "https://smartoffice-88c82.firebaseio.com",
	projectId: "smartoffice-88c82",
	storageBucket: "smartoffice-88c82.appspot.com",
	messagingSenderId: "362689760437"
};

firebase.initializeApp(config);
const messaging = firebase.messaging();
messaging.requestPermission()
	.then(function(){
		return messaging.getToken()
			.then(function(currentToken) {
				// alert(currentToken);
				document.cookie = "firebaseToken="+currentToken;
			})
			.catch(function(err) {
				console.log('An error occurred while retrieving token. ', err);
			});

	}).catch(function(err){
		$.confirm({
			icon: 'glyphicon glyphicon-trash',
			title: 'យល់ព្រម',
			content: 'សូមធ្វើការអនុញ្ញាត Notification ដើម្បីទទួលបានកិច្ចប្រជុំថ្មី!',
			draggable: true,
		});
	});
//	    messaging.onMessage(function(payload) {
//		    console.log('OnMessage:', payload);
//	    });