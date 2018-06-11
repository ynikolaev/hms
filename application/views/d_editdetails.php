<html>
<head>
<title>Edit Details</title>
<meta charset=”utf-8”>
<link rel="icon" href="<?php echo base_url(); ?>/Images/icon.png" type="image/gif">
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/CSS/normilizer.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src ="<?php echo base_url(); ?>JS/check_if_exists.js" type ="text/javascript"></script>
<script src ="<?php echo base_url(); ?>JS/edit_details.js" type ="text/javascript"></script>
<script src ="<?php echo base_url(); ?>/JS/moment.js" type ="text/javascript"></script>
<script src ="<?php echo base_url(); ?>/JS/combodate.js" type ="text/javascript"></script>
<script>
$(document).ready(function(){
	    $("#form").on( 'focus', ':input', function(){
        $(this).attr( 'autocomplete', 'off' );
    });

});
$(function(){
    $('#age').combodate({
    firstItem: 'name',
    maxYear: 2000,
    smartDays: true,
    format: 'YYYY-MM-D'
	});     
});
$(function(){
    $('#d_age').combodate({
    firstItem: 'name',
    maxYear: 2000,
    smartDays: true,
    format: 'YYYY-MM-D'
	});     
});
</script>
</head>
<body>
<div class="page">
<div id="login">
<h1><?php if($gender == "M" && $status == "patient"){ echo "Mr."; } else if ($gender == "F" && $status == "patient"){ echo "Ms.";} else if ($status == "doctor"){ echo "Dr.";} else if ($status == "admin"){ echo "Admin";}?> <?php if($status == "admin"){
echo $username; ?>, you may change your details here <img src="<?php echo base_url(); ?>Images/admin.png" alt="Admin Logo" height="62" width="62"> <?php 
} else if ($status == "doctor"){
echo $d_surname; ?>, you may change your details here <img src="<?php echo base_url(); ?>Images/doc.ico" alt="Doctor Logo" height="62" width="62"> <?php 
} else if ($status == "patient"){
echo $surname; ?>, you may change your details here <img src="<?php echo base_url(); ?>Images/patient.png" alt="Patient Logo" height="62" width="62"> <?php 
}?>
</h1>
<?php
if($this->session->tempdata('item')) {
  $message = $this->session->tempdata('item');
} else {
$message = "";
}
?>
<h3><?php echo $message ?></h3>
<h3>Choose from the options:</h3>

<!-- Edit Profile for Patient -->
<?php if($status == "patient"){?>
<span id="errormsg"><?php echo form_error('p_username'); ?></span>
<span id="errormsg"><?php echo form_error('p_fname'); ?></span>
<span id="errormsg"><?php echo form_error('p_pword'); ?></span>
<span id="errormsg"><?php echo form_error('p_conpword'); ?></span>
<span id="errormsg"><?php echo form_error('p_sname'); ?></span>
<span id="errormsg"><?php echo form_error('p_email'); ?></span>
<span id="errormsg"><?php echo form_error('p_age'); ?></span>
<span id="errormsg"><?php echo form_error('p_height'); ?></span>
<span id="errormsg"><?php echo form_error('p_weight'); ?></span>
<span id="errormsg"><?php echo form_error('p_gender'); ?></span>
<span id="errormsg"><?php echo form_error('p_telephone'); ?></span>
<span id="errormsg"><?php echo form_error('p_address'); ?></span>
<table style="width:100%">
  <tr>
    <td><button onclick="open_username()" id="bUsername" type="button">Username</button></td>
    <td><button onclick="open_firstname()" id="bFirstName" type="button">Firstname</button></td>	
    <td><button onclick="open_surname()" id="bSurname" type="button">Surname</button></td>
  </tr>
  <br>
  <tr>
    <td><button onclick="open_age()" id="bAge" type="button">Age</button></td>	
    <td><button onclick="open_height()" id="bHeight" type="button">Height</button></td>		
    <td><button onclick="open_weight()" id="bWeight" type="button">Weight</button></td>			
  </tr>
  <tr>
    <td><button onclick="open_password()" id="bPassword" type="button">Password</button></td>	
    <td><button onclick="open_email()" id="bEmail" type="button">Email</button></td>		
    <td><button onclick="open_gender()" id="bGender" type="button">Gender</button></td>			
  </tr>
  <tr>
	<td><button onclick="open_address()" id="bp_Address" type="button">Address</button></td>
	<td><button onclick="open_telephone()" id="bp_Telephone" type="button">Telephone</button></td>
  </table>
<br>
<form id="form" name="form" method="post">
  <?php echo form_open('form'); ?>
<div id="setusername">
<label>Username :<span id="message"> </span></label><br>
  <input id="username" name ="p_username" type="text" onblur="check_user_unique();" value="" size="25" placeholder="<?php echo $username ?>">
  <br/>
</div>
<div id="setpword">
  <label>Password :</label><br>
  <input id="pword" name="p_pword" type="password" value="" size="25" placeholder="**********">
  <br/>
  <label>Confirm Password :</label><br>
  <input id="conpword" name="p_conpword" type="password" value="" size="25" placeholder="**********">
  <br/>
</div>
<div id="setfname">
  <label>Firstname :</label><br/>
  <input id="fname" name="p_fname" type="text" value="" size="25" placeholder="<?php echo $firstname ?>">
  <br>
</div>
<div id="setsname">
  <label>Surname :</label><br>
  <input id="sname" name="p_sname" type="text" value="" size="25" placeholder="<?php echo $surname ?>">
  <br/>
</div>
<div id="setemail">
  <label>Email :</label><br>
  <input id="email" name="p_email" type="text" value="" size="25" placeholder="<?php echo $email ?>">
  <br>
</div>
<div id="setage">
<label>DOB : <?php echo $age ?></label><br/>
<div class="reg-time"><input type="text" id="age" data-template="D MMM YYYY" name="p_age" ></div>
  <br>
</div>
<div id="setheight">
  <label>Height :</label><br>
  <input id="height" name="p_height" type="number" value="" size="50" placeholder="<?php echo $height ?>">
  <br/>
</div>
<div id="setweight">
  <label>Weight :</label><br>
  <input id="weight" name ="p_weight" type="number" size="50" placeholder="<?php echo $weight ?>">
  <br/>
</div>
<div id="setgender">
  <label>Gender : <?php if ($gender == "M"){ echo "Male";} else if ($gender == "F"){ echo "Female";} ?></label><br>
  <input id="genM" type="radio" name="p_gender" value="M" <?php echo  set_radio('gender', 'M', TRUE); ?> />Male
  <input id="genF" type="radio" name="p_gender" value="F" <?php echo  set_radio('gender', 'F'); ?> />Female
  <br>
</div>
<div id="setaddress">
  <label>Address :</label><br>
  <div class="reg-line"><input id="address" name="p_address" type="text" placeholder="<?php echo $address ?>" size="50"></div>
  <br>
</div>
<div id="settelephone">
  <label>Telephone :</label><br>
  <div class="reg-line"><input id="telephone" name="p_telephone" type="text" placeholder="<?php echo $telephone ?>" size="50"></div>
  <br>
</div>
<br><input id="addpatient" name="submit" type="submit" value="Update Patient">
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/homepage"> Back</a></h3>
</form> 

<!-- Edit Profile for Doctor -->
<?php } else if ($status == "doctor"){?>
<span id="errormsg"><?php echo form_error('d_username'); ?></span>
<span id="errormsg"><?php echo form_error('d_fname'); ?></span>
<span id="errormsg"><?php echo form_error('d_pword'); ?></span>
<span id="errormsg"><?php echo form_error('d_conpword'); ?></span>
<span id="errormsg"><?php echo form_error('d_sname'); ?></span>
<span id="errormsg"><?php echo form_error('d_email'); ?></span>
<span id="errormsg"><?php echo form_error('d_age'); ?></span>
<span id="errormsg"><?php echo form_error('d_gender'); ?></span>
<span id="errormsg"><?php echo form_error('d_telephone'); ?></span>
<span id="errormsg"><?php echo form_error('d_address'); ?></span>
<span id="errormsg"><?php echo form_error('d_speciality'); ?></span>
<table style="width:100%">
  <tr>
    <td><button onclick="open_d_username()" id="dUsername" type="button">Username</button></td>
    <td><button onclick="open_d_firstname()" id="dFirstName" type="button">Firstname</button></td>
    <td><button onclick="open_d_surname()" id="dSurname" type="button">Surname</button></td>	
  </tr>
  <br>
  <tr>
	<td><button onclick="open_d_password()" id="dPassword" type="button">Password</button></td>
    <td><button onclick="open_d_age()" id="dAge" type="button">Age</button></td>
    <td><button onclick="open_d_email()" id="dEmail" type="button">Email</button></td>		
  </tr>
  <tr>
	<td><button onclick="open_d_address()" id="dp_Address" type="button">Address</button></td>
	<td><button onclick="open_d_telephone()" id="dp_Telephone" type="button">Telephone</button></td>	
    <td><button onclick="open_d_gender()" id="dGender" type="button">Gender</button></td>			
  </tr>
  <tr>
	<td></td>
	<td><button onclick="open_d_speciality()" id="dSpeciality" type="button">Speciality</button></td>	
	<td></td>
  </tr>
  </table>
<br>
<form id="form" name="form" method="post">
  <?php echo form_open('form'); ?>
<div id="setd_username">
<label>Username :<span id="message2"> </span></label><br>
  <input id="d_username" name ="d_username" type="text" onblur="check_doctor_unique();" value="" size="25" placeholder="<?php echo $d_username ?>">
  <br/>
</div>
<div id="setd_pword">
  <label>Password :</label><br>
  <input id="d_pword" name="d_pword" type="password" value="" size="25" placeholder="**********">
  <br/>
  <label>Confirm Password :</label><br>
  <input id="d_conpword" name="d_conpword" type="password" value="" size="25" placeholder="**********">
  <br/>
</div>
<div id="setd_fname">
  <label>Firstname :</label><br/>
  <input id="d_fname" name="d_fname" type="text" value="" size="25" placeholder="<?php echo $d_firstname ?>">
  <br>
</div>
<div id="setd_sname">
  <label>Surname :</label><br>
  <input id="d_sname" name="d_sname" type="text" value="" size="25" placeholder="<?php echo $d_surname ?>">
  <br/>
</div>
<div id="setd_email">
  <label>Email :</label><br>
  <input id="d_email" name="d_email" type="text" value="" size="25" placeholder="<?php echo $d_email ?>">
  <br>
</div>
<div id="setd_age">
<label>DOB : <?php echo $d_age ?></label><br/>
<div class="reg-time"><input type="text" id="d_age" data-template="D MMM YYYY" name="d_age" ></div>
  <br>
</div>
<div id="setd_gender">
  <label>Gender : <?php if ($gender == "M"){ echo "Male";} else if ($gender == "F"){ echo "Female";} ?></label><br>
  <input id="d_genM" type="radio" name="d_gender" value="M" <?php echo  set_radio('gender', 'M', TRUE); ?> />Male
  <input id="d_genF" type="radio" name="d_gender" value="F" <?php echo  set_radio('gender', 'F'); ?> />Female
  <br>
</div>
<div id="setd_address">
  <label>Address :</label><br>
  <div class="reg-line"><input id="d_address" name="d_address" type="text" placeholder="<?php echo $d_address ?>" size="50"></div>
  <br>
</div>
<div id="setd_telephone">
  <label>Telephone :</label><br>
  <div class="reg-line"><input id="d_telephone" name="d_telephone" type="text" placeholder="<?php echo $d_telephone ?>" size="50"></div>
  <br>
</div>
<div id="setd_speciality">
  <label>Speciality :</label><br>
  <div class="reg-select"><select name="d_speciality" class="form-control">
	  <option value=<?php echo $d_speciality_id; ?>><?php echo $d_speciality; ?></option>
	  <option value="">-----------------</option>
    <?php foreach($specialities as $each){ ?>
        <option value="<?php echo $each->speciality_id; ?>"><?php echo $each->name; ?></option>';
    <?php } ?>
</select></div>
</div>
<br><input id="adddoctor" name="submit" type="submit" value="Update Doctor">
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/homepage"> Back</a></h3>
</form>
<?php } ?>
</div>
</div>
<script>
var form = document.getElementById("form");
    function action() {
		form.reset();
		$( "#setusername" ).prop( "hidden", true );
		$( "#setpword" ).prop( "hidden", true );
		$( "#setconpword" ).prop( "hidden", true );
		$( "#setfname" ).prop( "hidden", true );
		$( "#setsname" ).prop( "hidden", true );
		$( "#setemail" ).prop( "hidden", true );
		$( "#setage" ).prop( "hidden", true );
		$( "#setheight" ).prop( "hidden", true );
		$( "#setweight" ).prop( "hidden", true );
		$( "#setgender" ).prop( "hidden", true );
		$( "#setaddress" ).prop( "hidden", true );
		$( "#settelephone" ).prop( "hidden", true );
		$( "#addpatient" ).prop( "disabled", true );
		$( "#setd_username" ).prop( "hidden", true );
		$( "#setd_pword" ).prop( "hidden", true );
		$( "#setd_conpword" ).prop( "hidden", true );
		$( "#setd_fname" ).prop( "hidden", true );
		$( "#setd_sname" ).prop( "hidden", true );
		$( "#setd_email" ).prop( "hidden", true );
		$( "#setd_age" ).prop( "hidden", true );
		$( "#setd_gender" ).prop( "hidden", true );
		$( "#setd_address" ).prop( "hidden", true );
		$( "#setd_telephone" ).prop( "hidden", true );
		$( "#setd_speciality" ).prop( "hidden", true );
		$( "#adddoctor" ).prop( "disabled", true );
    }

window.onload = action;
</script>
</body>
</html>
