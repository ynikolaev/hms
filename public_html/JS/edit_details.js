$(document).ready(function(){
    $("#form").on( 'focus', ':input', function(){
        $(this).attr( 'autocomplete', 'off' );
    });
});

// PATIENT
//window.onload = form.reset();
function open_telephone() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", false );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_address() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", false );
	$( "#setage" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_age() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", false );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_username() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", false );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_firstname() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", false );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_surname() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", false );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_password() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", false );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_email() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", false );
	$( "#setgender" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_height() {
	$( "#setheight" ).prop( "hidden", false );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_weight() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", false );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", true );
	$( "#setage" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

function open_gender() {
	$( "#setheight" ).prop( "hidden", true );
	$( "#setweight" ).prop( "hidden", true );
	$( "#setusername" ).prop( "hidden", true );
	$( "#setfname" ).prop( "hidden", true );
	$( "#setsname" ).prop( "hidden", true );
	$( "#setpword" ).prop( "hidden", true );
	$( "#setemail" ).prop( "hidden", true );
	$( "#settelephone" ).prop( "hidden", true );
	$( "#setaddress" ).prop( "hidden", true );
	$( "#setgender" ).prop( "hidden", false );
	$( "#setage" ).prop( "hidden", true );
	$( "#addpatient" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#genF" ).prop( "checked", false );
	$( "#genM" ).prop( "checked", false );
};

// DOCTORS
function open_d_telephone() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", false );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_username() {
	$( "#setd_username" ).prop( "hidden", false );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_firstname() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", false );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_surname() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", false );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_password() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", false );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_email() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", false );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_gender() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", false );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_address() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", false );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_age() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", false );
	$( "#setd_speciality" ).prop( "hidden", true );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};

function open_d_speciality() {
	$( "#setd_username" ).prop( "hidden", true );
	$( "#setd_fname" ).prop( "hidden", true );
	$( "#setd_sname" ).prop( "hidden", true );
	$( "#setd_pword" ).prop( "hidden", true );
	$( "#setd_email" ).prop( "hidden", true );
	$( "#setd_gender" ).prop( "hidden", true );
	$( "#setd_telephone" ).prop( "hidden", true );
	$( "#setd_address" ).prop( "hidden", true );
	$( "#setd_age" ).prop( "hidden", true );
	$( "#setd_speciality" ).prop( "hidden", false );
	$( "#adddoctor" ).prop( "disabled", false );
	//$("#username").css("background-color","white");
	$("#message").html("");
	form.reset();
	$( "#d_genF" ).prop( "checked", false );
	$( "#d_genM" ).prop( "checked", false );
	$(this).closest('form').find("input[type=number], textarea").val("");
};