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

            // User is signed in.
            document.getElementById('user-heading').textContent = "Signed in as: " + user.uid;

            //alert("success");
            console.log(registerAttempt);

            if (registerAttempt) {

                var email       = document.getElementById("email").value;
                var password    = document.getElementById("password").value;
                var name        = document.getElementById("name").value;
                var description = document.getElementById("desc").value;
                var location    = document.getElementById("location").value;

                updateMerchantInformation(user.uid, email, password , name, description, location);

                // uploading file along with profice info
                var selectedFile = document.getElementById('fileUploadProPic').files[0];
                uploadFile(selectedFile, user.uid, '/merchant/', 'pro_pic.png', 'profile_photo');

            }


            //getMerchantProfileInfo();
            //getAllOrdersForSpecificMerchant(user.uid);
            //listenForNewOrdersforSpecificMerchant(user.uid);

        } else {

            document.getElementById('user-heading').textContent = "Not Signed In";

            // No Merchant is signed in.
            //alert("no success");
        }
    });
}
