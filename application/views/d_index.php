<!doctype html>

<html lang="en">

<head>
<meta charset="utf-8">
<title>HMS: Index</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/navigation.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/settings.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/splash.js" type ="text/javascript"></script>
<link rel="apple-touch-startup-image" href="<?php echo base_url(); ?>/Images/mainsplash.gif" />
<link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>/Images/icon.png" type="image/x-icon">
<link rel="apple-touch-icon" sizes="152×152" href="<?php echo base_url(); ?>/Images/icon.png">
<link rel="apple-touch-icon" sizes="180×180" href="<?php echo base_url(); ?>/Images/icon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>CSS/style.css">
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>CSS/normilizer.css" rel="stylesheet" type="text/css">
<style type="text/css">
html { font-size: <?php echo $fontsize;?>;
-moz-filter:<?php echo $grayscale;?>;
-webkit-filter:<?php echo $grayscale;?>;
filter:<?php echo $grayscaleie; ?>; /* IE6-9 */
filter:<?php echo $grayscale;?>;
}
</style>
</head>
<body>
		<header>
			<div class="back">
				<center><img id="nogifPlace" src="<?php echo base_url(); ?>Images/logo3.png" alt="iBear Picture"> </center>
				<center><img id="gifPlace" src="<?php echo base_url(); ?>Images/logo3s.png" alt="iBear Picture" loop="false"> </center>
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
		<!---Right Side --->
<div id="right_mySidenav" class="right_sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav_right()">&times;</a>
  <center></center>
</div>
		<!----------------->
	<div class="container" onclick="closeNav()">
			<center><div class="index-text">
				<center><p><u>Disclaimer</u></p></center>
			<p> All information on the site is private property of the owner. On this site, you acknowledge that you are giving the right to place your personal data on the server. All images on the site are taken from open sources. All rights reserved.  </p>
			</div></center>
	</div>
	<div class="desktop-footer">
		<h3><p>&copy; 2017 Yan Nikolaev<p></h3>
	</div>
	<div class="mobile-footer">
		<table class="footer-bar">
			<tr>
				<td>
					<div class="empty-slot"></div>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="openNav('index')"><img id="menu-button" src="<?php echo base_url(); ?>Images/menu-button.png" alt="Menu Button"></a>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="indexGifRun()"><img id="quest-button" src="<?php echo base_url(); ?>Images/quest.png" alt="Hint Button"></a>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
