<html>
<head>
<title>HMS: Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/navigation.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/settings.js" type ="text/javascript"></script>
<link rel="icon" href="<?php echo base_url(); ?>/Images/icon.png" type="image/gif">
<link href="<?php echo base_url(); ?>/CSS/normilizer.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
html { font-size: <?php echo $fontsize;?>;
-moz-filter:<?php echo $grayscale;?>;
-webkit-filter:<?php echo $grayscale;?>;
filter:<?php echo $grayscaleie; ?>; /* IE6-9 */
filter:<?php echo $grayscale;?>;
}
</style>
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
</script>
</head>
<body>
		<header>
			<div class="back">
				<center><img id="nogifPlace" src="<?php echo base_url(); ?>Images/logo3login.png" alt="iBear Picture"> </center>
				<center><img id="gifPlace" src="<?php echo base_url(); ?>Images/logo3slogin.png" alt="iBear Picture"> </center>
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
		  <a href="<?php echo base_url(); ?>Hms_main/user_index"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/home.png" alt="Home Icon"> Home</a>
		  <a href="<?php echo base_url(); ?>Hms_main/login"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/login.png" alt="Login Icon"> Login </a>
		  <a href="<?php echo base_url(); ?>Hms_main/register"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/register.png" alt="Register Icon"> Registration</a>
		  	<div onclick="openSettings()"><a class="settings-menu" href="javascript:void(0);"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/settings.png" alt="Settings Icon"> Settings <img id="setting-arrow" src="<?php echo base_url(); ?>Images/arrowright.png" alt="Arrow Pic"></a></div>
		<div id="settings-links">
			<a href="javascript:void(0);" onclick="set_grayscale('<?php echo $grayscale?>')">Grayscale <span id="gray-stat"><?php echo $gray_stat?></span></a>
		</div>
		</div>
		<!----------------->
	<div class="container" onclick="closeNav()">
		<div class="desktop-border">
		<div class="valid-errors">
			<span id="error-head"></span>
			<span id="errormsg"><?php echo form_error('uname'); ?></span>
			<span id="errormsg"><?php echo form_error('pword'); ?></span>
		</div>
		<div class="login-text">
			<form id="form" name="form" method="post">
			<?php echo form_open('form'); ?>
			<label>Username :</label><br>
			<input type="text" id="uname" name="uname" value="<?php echo set_value('uname'); ?>" size="50"><br>
			<br>
			<label>Password :</label><br>
			<input type="password" id="pword" name="pword" value="<?php echo set_value('pword'); ?>" size="50"><br>
			<br>
<div class="reg-submit">
			<input type="submit" id="submit" value="Submit"><br>
</div>
			<div id="desktop-back"><h3><a href="<?php echo base_url(); ?>Hms_main/user_index"> Back</a></h3></div>

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
<a href="#" onclick="goBack();"><img class="back-button" src="<?php echo base_url(); ?>Images/back.png" alt="Back Button"></a>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="openNav('login')"><img id="menu-button" src="<?php echo base_url(); ?>Images/menu-button.png" alt="Menu Button"></a>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="loginGifRun()"><img id="quest-button" src="<?php echo base_url(); ?>Images/quest.png" alt="Hint Button"></a>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
