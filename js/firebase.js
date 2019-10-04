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

// Provedor de login
var provider = new firebase.auth.GoogleAuthProvider();

// Super global do firebase
var fb = {};

// Monitora usuário logado
firebase.auth().onAuthStateChanged(function(user) {
	if (user) {
		var msg = `
		<img src="${user.photoURL}" alt="${user.displayName}" style="width:32px;height:32px">
		<b>Olá ${user.displayName}!</b>
		`;
		$('#userData').html(msg);
		$('#btnLogin').hide();
		$('#btnLogout').show();
		fb.user = user;
	} else {
		$('#userData').hide();
		$('#btnLogin').show();
		$('#btnLogout').hide();
	}
});

// Clique em login
$(document).on('click', '#btnLogin', userIn);


// Clique em logout
$(document).on('click', '#btnLogout', userOut);

// Login de usuario
function userIn(){
	firebase.auth().signInWithPopup(provider).then(function(result){
		location.reload();
	});
}

// Logout de usuário
function userOut(){
	firebase.auth().signOut();
}
