<!doctype html>

<html lang="en">

<head>
<title>HMS: Register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/navigation.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/check_if_exists.js" type ="text/javascript"></script>
<link rel="apple-touch-startup-image" href="<?php echo base_url(); ?>/Images/mainsplash.gif" />
<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>/Images/icon.png" type="image/x-icon">
<link rel="apple-touch-icon" sizes="152×152" href="<?php echo base_url(); ?>/Images/icon.png">
<link rel="apple-touch-icon" sizes="180×180" href="<?php echo base_url(); ?>/Images/icon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/style.css">
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>CSS/normilizer.css" rel="stylesheet" type="text/css">
<script src ="<?php echo base_url(); ?>/JS/moment.js" type ="text/javascript"></script>
<script src ="<?php echo base_url(); ?>/JS/combodate.js" type ="text/javascript"></script>
<script>
$(document).ready(function(){
	var txt1 = "<center><p><u><b>Validation Error!</b></u></p></center>";
	if ($('#errormsg').is(':empty')){
		$(document).ready(function() { $('.valid-errors').css({'border': 'none'}); });
  	} else {
	  	$(document).ready(function() { $("#error-head").append(txt1); });
		$(document).ready(function() { $('.valid-errors').css({'border': '2px solid red'}); });
  	}
	
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
</script>
</head>
<body>
		<header>
			<div class="back">
				<center><img id="nogifPlace" src="<?php echo base_url(); ?>Images/logo3reg.png" alt="iBear Picture"> </center>
				<center><img id="gifPlace" src="<?php echo base_url(); ?>Images/logo3reg.png" alt="iBear Picture"> </center>
			</div>
		</header>
		<!--- Desktop Navigation -->
		<ul class="topnav" id="myTopnav">
		  <li class="navLeft"><h2><a class="active" href="<?php echo base_url(); ?>Hms_main/user_index"><img class="desk-menu-icon" src="<?php echo base_url(); ?>Images/home.png" alt="Home Icon"> Home</a></h2></li>
		  <li class="navRight"><h2><a href="<?php echo base_url(); ?>Hms_main/login"><img class="desk-menu-icon" src="<?php echo base_url(); ?>Images/login.png" alt="Login Icon"> <u>Login</u></a></h2></li>
		  <li class="navRight"><h2><a href="<?php echo base_url(); ?>Hms_main/register"><img class="desk-menu-icon" src="<?php echo base_url(); ?>Images/register.png" alt="Register Icon"> Register</a></h2></li>
		  
		</ul>
		<!----------------->
		<!--- Mobile Navigation -->
		<div id="mySidenav" class="sidenav">
			<div id="profile-menu-links"></div>
		  <a href="<?php echo base_url(); ?>Hms_main/user_index"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/home.png" alt="Home Icon"><br>Home</a>
		  <a href="<?php echo base_url(); ?>Hms_main/login"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/login.png" alt="Login Icon"><br>Login</a>
		  <a href="<?php echo base_url(); ?>Hms_main/register"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/register.png" alt="Register Icon"><br><u>Register</u></a>
		</div>
		<!----------------->
	<div class="container" onclick="closeNav()">
		<div class="desktop-border">
		<div class="valid-errors">
<span id="error-head"></span>
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
<span id="errormsg"><?php echo form_error('p_address'); ?></span>
<span id="errormsg"><?php echo form_error('p_telephone'); ?></span>
		</div>
		<div class="reg-text">
			<form id="form" name="form" method="post">
			<?php echo form_open('form'); ?>
			
			<label>Username : </label><span id="message"> </span><br>
			<div class="reg-line"><input id="username" name ="p_username" type="text" onblur="check_user_unique();" value="<?php echo set_value('p_username'); ?>" size="25"></div><br>
			
			<label>Password :</label><br>
			<div class="reg-line"><input id="pword" name="p_pword" type="password" value="<?php echo set_value('p_pword'); ?>" size="25"></div><br>
			
			<label>Confirm Password :</label><br>
			<div class="reg-line"><input id="conpword" name="p_conpword" type="password" value="<?php echo set_value('p_conpword'); ?>" size="25"></div><br>
			
			<label>Firstname :</label><br>
			<div class="reg-line"><input id="fname" name="p_fname" type="text" value="<?php echo set_value('p_fname'); ?>" size="25"></div><br>
			
			<label>Surname :</label><br>
			<div class="reg-line"><input id="sname" name="p_sname" type="text" value="<?php echo set_value('p_sname'); ?>" size="25"></div><br>

			<label>Email :</label><br>
			<div class="reg-line"><input id="email" name="p_email" type="text" value="<?php echo set_value('p_email'); ?>" size="25"></div><br>

			<label>Address :</label><br>
			<div class="reg-line"><input id="address" name="p_address" type="text" value="<?php echo set_value('p_address'); ?>" size="25"></div><br>

			<label>Height :</label><br>
			<div class="reg-line"><input id="height" name="p_height" type="text" placeholder="cm" value="<?php echo set_value('p_height'); ?>" size="25"></div><br>

			<label>Weight :</label><br>
			<div class="reg-line"><input id="weight" name ="p_weight" type="text" placeholder="kg" value="<?php echo set_value('p_weight'); ?>" size="25"></div><br>

			<label>Telephone :</label><br>
			<div class="reg-line"><input id="telephone" name="p_telephone" type="text" value="<?php echo set_value('p_telephone'); ?>" size="25"></div><br>

			<label>DOB :</label><br>
			<div class="reg-time"><input type="text" id="age" data-template="D MMM YYYY" name="p_age" ></div><br>

			<div class="reg-line"><label>Gender :</label><br>
				  <input type="radio" name="p_gender" value="M" <?php echo  set_radio('p_gender', 'M', TRUE); ?> /> Male
				  <input type="radio" name="p_gender" value="F" <?php echo  set_radio('p_gender', 'F'); ?> /> Female
			</div><br>
<div class="reg-submit">
<input onclick="onTop()" id="submit" name="submit" type="submit" value="Submit"/>
</div>
</form>
		</div>
		</div>
	</div>
	<div class="desktop-footer">
		<h3><p>&copy; 2017 Yan Nikolaev<p></h3>
	</div>
	<div class="mobile-footer">
		<table class="footer-bar">
			<tr>
				<td>
<a href="#"><img class="back-button" src="<?php echo base_url(); ?>Images/back.png" alt="Back Button"></a>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="openNav('login')"><img id="menu-button" src="<?php echo base_url(); ?>Images/menu-button.png" alt="Menu Button"></a>
				</td>
				<td>
					<div class="empty-slot"></div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
