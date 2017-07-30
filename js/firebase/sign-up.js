// Author: Davane Daivs
// Date: May 26, 2017

// this action is performed whenever the
// page is finished loading
window.onload = function() {

    //console.log(getTimeStamp());

    registerAttempt = false
    initApp();
    //uploadProfilePhoto();
    //uploadMealPhoto();

};



function initApp() {

    firebase.auth().onAuthStateChanged(function(user) {


        if (user) {



        } else {



        }
    });
}

// --------------------------------------------------
// Merchant FUNCTIONS
// --------------------------------------------------


function signUpNewMerchant(){

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var rePassword = document.getElementById("email").value;
    var companyName = document.getElementById("password").value;
    var companyAddress = document.getElementById("email").value;

    if (email.length < 4) {
        alert('Please enter an email address.');
        return;
    }

    if (password.length < 4) {
        alert('Please enter a password.');
        return;
    }

    singUpNewMerchantsWithParamters(email, password);
}

// signing up Merchants and returning the Merchant
// newly register user infromation
// in the 'onAuthStateChanged' to add the Merchant node
function singUpNewMerchantsWithParamters(email, password) {

    registerAttempt = true;

    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;

        console.log(error);

        if (errorCode == "auth/weak-password") {
            alert("WEAK PASSWORD");
            return false;
        } else if(errorCode != null) {
            alert("UNKNOWN ERROR: Registering");
        }

    });

    // 'onAuthStateChanged' Is Triggered whenever
    // the sign in was successful
}
