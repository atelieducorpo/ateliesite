  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDtNZIxi12reDquEEnyIG2U7sdhF12RZRg",
    authDomain: "atelieducorpoapp.firebaseapp.com",
    databaseURL: "https://atelieducorpoapp.firebaseio.com",
    projectId: "atelieducorpoapp",
    storageBucket: "",
    messagingSenderId: "302241854487",
    appId: "1:302241854487:web:e960970824b52415e15852"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  // Initialize Cloud Firestore through Firebase
  var db = firebase.firestore();
var userLogado = false;
  
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    var msg = `
    <b>Olá ${user.displayName}!</b><br>
    <img src="${user.photoURL}" alt="${user.displayName}" style="width:32px;height:32px">
    `;
    document.getElementById('login').innerHTML = msg;
    userLogado = true;
  } else {
    console.log('no user');
    userLogado = false;
  }
});

var btnLogin = document.getElementById('login');
btnLogin.onclick = function() {
  if (userLogado) {
    firebase.auth().signOut().then(function() {
      var msg = `Login`;
    document.getElementById('login').innerHTML = msg;
    }).catch(function(error) {
      // An error happened.
    });
  } else {
  var provider = new firebase.auth.GoogleAuthProvider();
  firebase.auth().signInWithPopup(provider).then(function(result) {
    var user = result.user;
    var msg = `
      <b>Olá ${user.displayName}!</b><br>
      <img src="${user.photoURL}" alt="${user.displayName}" style="width:32px;height:32px">
    `;
    document.getElementById('login').innerHTML = msg;

    console.log(user);
    //console.log(user.displayName, user.email, user.photoURL);
  }).catch(function(error) {
    console.error(error);
  });
  }
}



