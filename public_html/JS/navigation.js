var openLeft = 0;
var gif = 0;
var openMenu = 0;
var openRight = 0;
var openSetting = 0;

$(document).ready(function(){
	document.getElementById("profile-menu-links").style.display = "none";
	document.getElementById("settings-links").style.display = "none";
});

function openProfile() {
	$("#profile-menu-links").animate({height: 'toggle'});
	if (openMenu == 0) {
		$("#profile-arrow").attr("src","http://hms-ibear.co.uk/Images/arrowdown.png");
		openMenu++;
	} else {
		$("#profile-arrow").attr("src","http://hms-ibear.co.uk/Images/arrowright.png");
		openMenu = 0;
	}
}

function openSettings() {
	$("#settings-links").animate({height: 'toggle'});
	if (openSetting == 0) {
		$("#setting-arrow").attr("src","http://hms-ibear.co.uk/Images/arrowdown.png");
		openSetting++;
	} else {
		$("#setting-arrow").attr("src","http://hms-ibear.co.uk/Images/arrowright.png");
		openSetting = 0;
	}
}

function goBack() {
    parent.history.back();
		return false;
}
	function myFunction() {
	    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}
	
	function onTop() {
		$('html, body').animate({ scrollTop: 0 }, 'fast');
		}
	
	function openNav(data) {
		if (openLeft == 0){
		    document.getElementById("mySidenav").style.width = "75%";
		    $("#menu-button").attr("src","http://hms-ibear.co.uk/Images/menu-button-pressed.png");
		    $("#quest-button").attr("src","http://hms-ibear.co.uk/Images/quest.png");
		    if (data == "login"){
			    $("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3slogin.png");
		    } else if (data == "index") {
			    $("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3s.png");
		    } else if (data == "homepage") {
			    $("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3homepage.png");
		    } else if (data == "payments") {
				closeNav_right();
		    }
		    openLeft = 1;	
		} else {
			document.getElementById("mySidenav").style.width = "0";
			openLeft = 0;
			$("#menu-button").attr("src","http://hms-ibear.co.uk/Images/menu-button.png");
		    $("#quest-button").attr("src","http://hms-ibear.co.uk/Images/quest.png");
			if (data == "login"){
			    $("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3slogin.png");
		    } else if (data == "index") {
			    $("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3s.png");
		    } else if (data == "homepage") {
			    $("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3homepage.png");
		    }
			gif = 0;
		}
	}
	
	function openNav_r() {
		if (openRight == 0){
			document.getElementById("mySidenav").style.width = "0";
			openLeft = 0;
		    document.getElementById("right_mySidenav").style.width = "75%";
			$("#menu-button").attr("src","http://hms-ibear.co.uk/Images/menu-button.png");
		} else {
			closeNav();
		}
	}
	
	function closeNav_right() {
	    document.getElementById("right_mySidenav").style.width = "0";
	    openRight = 0;
	}
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		openLeft = 0;
		$("#menu-button").attr("src","http://hms-ibear.co.uk/Images/menu-button.png");

	}
		
	function indexGifRun() {
		if (gif == 0) {
			closeNav();
			closeNav_right();
			$('html, body').animate({ scrollTop: 0 }, 'fast');
			$("#quest-button").attr("src","http://hms-ibear.co.uk/Images/quest-pressed.png");
			$("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3.gif");
			gif = 1;
		} else {
			$("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3s.png");
			$("#quest-button").attr("src","http://hms-ibear.co.uk/Images/quest.png");
			gif = 0;
		}

	}
	
	function loginGifRun() {
		if (gif == 0) {
			closeNav();
			$('html, body').animate({ scrollTop: 0 }, 'fast');
			$("#quest-button").attr("src","http://hms-ibear.co.uk/Images/quest-pressed.png");
			$("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3slogin.gif");
			gif = 1;
		} else {
			$("#gifPlace").attr("src","http://hms-ibear.co.uk/Images/logo3slogin.png");
			$("#quest-button").attr("src","http://hms-ibear.co.uk/Images/quest.png");
			gif = 0;
		}

	}