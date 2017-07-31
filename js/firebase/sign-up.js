// Author: Davane Daivs
// Date: May 26, 2017

// this action is performed whenever the
// page is finished loading
window.onload = function() {

    //console.log(getTimeStamp());

    registerAttempt = false
    initApp();

};

function initApp() {

    //  signOutMerchant();
    firebase.auth().onAuthStateChanged(function(user) {

        console.log(user);

        if (user) {

            // checks to see if the user just attempted to log in or did
            // they just go on the site
            // "onAuthStateChanged" is used to check to see if user were
            // previoulsy logged in and is the callback funtion
            // for "createUserWithEmailAndPassword" and "signInWithEmailAndPassword"
            if (registerAttempt) {

                // user clicked the register button
                // to try and register
                var userId      = user.uid;
                var email       = document.getElementById("emailInputLabelId").value;
                var password    = document.getElementById("passwordInputLabelId").value;
                var companyName = document.getElementById("companyNameInputLabelId").value;
                var address     = document.getElementById("companyAddressInputLabelId").value;

                updateMerchantInformation(userId, email, password, companyName, address);


            } else {

                // user was previously logged in


            }

        } else {



        }
    });
}

// --------------------------------------------------
// Merchant FUNCTIONS
// --------------------------------------------------

function signOutMerchant(){

    // sign out function
    firebase.auth().signOut().then(function() {

        // Sign-out successful.

    }).catch(function(error) {
        // An error happened.
        console.log(error)
    });

}

function signUpNewMerchant(){

    var email = document.getElementById("emailInputLabelId").value;
    var password = document.getElementById("passwordInputLabelId").value;
    var rePassword = document.getElementById("rePasswordInputLabelId").value;
    var companyName = document.getElementById("companyNameInputLabelId").value;
    var companyAddress = document.getElementById("companyAddressInputLabelId").value;

    if (email.length < 4) {
        alert('Please enter an email address.');
        return;
    }

    if (password.length < 8) {
        alert('Please enter a password.');
        return;
    } else if (rePassword != password) {
        alert('Passwords do not Match.');
        return
    }

    if (companyName.length == 0) {
        alert('Enter a valid company name');
        return
    }

    if (companyAddress.length == 0) {
        alert('Enter a valid company address');
        return
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

// adding new authenticated Merchant to Merchant node
function updateMerchantInformation(uid, email, name, address, imgUrl = null) {

    // A merchant entry.
    var merchantData = {
        'email': email,
        'fullname': name,
        'location': address,
        'imgUrl': imgUrl,
    };

    var updates = {};
    updates['/merchant/' + uid] = merchantData;

    return firebase.database().ref().update(updates, function(error){

        registerAttempt = false;

        if (error) {

            console.log(error);
            return;

        } else {

            console.log("successfully Added To Firebase Realtime Databse");
            document.location.href = "http://localhost/~davanedavis/mobile-Food-App/testing.php";

        }
    });
}
