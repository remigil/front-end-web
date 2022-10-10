/*
Give the service worker access to Firebase Messaging.
Note that you can only use Firebase Messaging here, other Firebase libraries are not available in the service worker.
*/
importScripts("https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js");
importScripts(
	"https://www.gstatic.com/firebasejs/8.10.1/firebase-messaging.js"
);

/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
	apiKey: "AIzaSyCD0yzgSLiF7_vOgyKP_m8uaONbDc7woo8",

	authDomain: "g20k3i.firebaseapp.com",

	projectId: "g20k3i",

	storageBucket: "g20k3i.appspot.com",

	messagingSenderId: "475022830226",

	appId: "1:475022830226:web:51022ccfb162eac1b0144b",
});

/*
Retrieve an instance of Firebase Messaging so that it can handle background messages.
*/
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function (payload) {
	console.log(
		"[firebase-messaging-sw.js] Received background message ",
		payload
	);
	const notification = JSON.parse(payload.data.notification);
	// Customize notification here
	const notificationTitle = notification.title;
	const notificationOptions = {
		body: notification.body,
		icon: notification.icon,
	};

	return self.registration.showNotification(
		notificationTitle,
		notificationOptions
	);
});
