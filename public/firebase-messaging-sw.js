importScripts("https://www.gstatic.com/firebasejs/10.12.0/firebase-app-compat.js");
importScripts("https://www.gstatic.com/firebasejs/10.12.0/firebase-messaging-compat.js");

firebase.initializeApp({
  apiKey: "AIzaSyDpfGdYS-d36L_okAgAi0x9pCznVU8NzVs",
  authDomain: "notification-84b9d.firebaseapp.com",
  projectId: "notification-84b9d",
  storageBucket: "notification-84b9d.appspot.com",
  messagingSenderId: "14580269122",
  appId: "1:14580269122:web:69ae1072b63824f2ac2ddb"
});

const messaging = firebase.messaging();

// messaging.onBackgroundMessage(function(payload) {
//   console.log("Received background message: ", payload);
//   self.registration.showNotification(payload.notification.title, {
//     body: payload.notification.body,
//     icon: '/icon.png' // optional
//   });
// });
