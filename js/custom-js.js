Waves.attach('.btn-sign-in-center', ['waves-float'],['waves-button']);
Waves.init();

function navX(x) {
	x.classList.toggle("change");
}

$(document).ready(function(){
    $("#signup").click(function(){
    	document.getElementById("signin-content").style.display="none";
    		$("#signup-content").fadeIn('slow');
    });

    $("#signin").click(function(){
    	document.getElementById("signup-content").style.display="none";
    		$("#signin-content").fadeIn('slow');	
    });
});