Waves.attach('.btn-sign-in-center', ['waves-float'],['waves-button']);
Waves.init();

function navX(x) {
	x.classList.toggle("change");
}

$(document).ready(function(){
    $("#signup").click(function(){
    	document.getElementById("signin-content").style.display="none";
        document.getElementById("signup").style.color="#fd5c4c";
        document.getElementById("signin").style.color="black";
    		$("#signup-content").fadeIn('slow');
    		$(".contain").animate({height:'620'});

    });


    $("#signin").click(function(){
    	document.getElementById("signup-content").style.display="none";
        document.getElementById("signin").style.color="#fd5c4c";
        document.getElementById("signup").style.color="black";
    		$("#signin-content").fadeIn('slow');
    		$(".contain").animate({height:'550'});	
    });
});

var xhr = new XMLHttpRequest();

xhr.open("GET","restaurantList.txt", false);

xhr.send(null);

alert(xhr.responseText);
