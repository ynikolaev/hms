<html>
<head>
<title>HMS: Homepage</title>
<meta charset=”utf-8”>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/navigation.js" type ="text/javascript"></script>
<link rel="icon" href="<?php echo base_url(); ?>/Images/icon.png" type="image/gif">
<link href="<?php echo base_url(); ?>/CSS/normilizer.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
html { font-size: 1em; }
</style>
</head>
<body>
		<header>
			<div class="back" onclick="closeNav()">
				<center><img id="nogifPlace" src="<?php echo base_url(); ?>Images/logo3homepage.png" alt="iBear Picture"> </center>
				<center><img id="gifPlace" src="<?php echo base_url(); ?>Images/logo3homepage.png" alt="iBear Picture"> </center>
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
			<div onclick="openProfile()"><a class="profile-menu" href="javascript:void(0);" ><?php if ($status == "patient" || $status == "doctor") { ?>
<?php if($gender == "M" && $status == "patient"){?> <img src="<?php echo base_url(); ?>Images/patient.png" class="mob-menu-icon" alt="Patient Logo"> <?php echo 'Mr. '.$surname.''; } else if ($gender == "F" && $status == "patient"){?> <img src="<?php echo base_url(); ?>Images/patient.png" class="mob-menu-icon" alt="Patient Logo"> <?php echo 'Ms.'.$surname.''; } else if ($status == "doctor"){?> <img src="<?php echo base_url(); ?>Images/doc.png" class="mob-menu-icon" alt="Doctor Logo"> <?php  echo 'Dr. '.$d_surname.''; } 
} else {
	echo $username; ?> <img src="<?php echo base_url(); ?>Images/admin.png" alt="Admin Logo"> <?php
}?> <img id="profile-arrow" src="<?php echo base_url(); ?>Images/arrowright.png" alt="Arrow Pic"></a></div>
		<div id="profile-menu-links">
		  <a href="<?php echo base_url(); ?>Hms_main/editdetails"><img class="sub-mob-menu-icon" src="<?php echo base_url(); ?>Images/edit.png" alt="Edit Icon"> Edit Details</a>
		  <?php if($status == "patient") { ?><a href="<?php echo base_url(); ?>Hms_main/payments"><img class="sub-mob-menu-icon" src="<?php echo base_url(); ?>Images/payment.png" alt="Logout Icon"> Payments</a><?php }?>
		  <a href="<?php echo base_url(); ?>Hms_main/logout"><img class="sub-mob-menu-icon" src="<?php echo base_url(); ?>Images/logout.png" alt="Logout Icon"> Logout</a>
		</div>
		  <a href="<?php echo base_url(); ?>Hms_main/logout"><img class="mob-menu-icon" src="<?php echo base_url(); ?>Images/logout.png" alt="Logout Icon"> Logout</a>
		</div>
		
	<div class="container" onclick="closeNav()">
<h1>
<?php if ($status == "patient" || $status == "doctor") { ?>
<?php if($gender == "M" && $status == "patient"){ echo 'Mr. '.$surname.', welcome to the main page!'; ?> <img src="<?php echo base_url(); ?>Images/patient.png"  class="mob-menu-icon" alt="Patient Logo"> <?php } else if ($gender == "F" && $status == "patient"){ echo 'Ms. '.$surname.', welcome to the main page!'; ?> <img src="<?php echo base_url(); ?>Images/patient.png" class="mob-menu-icon" alt="Patient Logo"> <?php } else if ($status == "doctor"){ echo 'Dr. '.$d_surname.', welcome to the main page!'; ?> <img src="<?php echo base_url(); ?>Images/doc.png" class="mob-menu-icon" alt="Doctor Logo"> <?php } 
} else {
?>Admin <?php echo $username; ?>, welcome to the main page! <img src="<?php echo base_url(); ?>Images/admin.png" class="mob-menu-icon" alt="Admin Logo"> <?php
}?>
</h1>
<h2>You are logged in!</h2>
<h3><a href="<?php echo base_url(); ?>Hms_main/editdetails"> Edit Details (For All)</a></h3>
<h3><a href="<?php echo base_url(); ?>Hms_main/a_deletep"> Manage Users (For Admin)</a></h3>
<h3><a href="<?php echo base_url(); ?>Hms_main/diagnosis"> Diagnosis (For Doctors)</a></h3>
<h3><a href="<?php echo base_url(); ?>Hms_main/logout"> Logout</a></h3>
	</div>
	
		<div class="desktop-footer" >
		<h3><p>&copy; 2017 Yan Nikolaev<p></h3>
	</div>
	<div class="mobile-footer">
		<table class="footer-bar">
			<tr>
				<td>
					<div class="empty-slot"></div>
				</td>
				<td>
					<a href="javascript:void(0);" onclick="openNav('homepage')"><img id="menu-button" src="<?php echo base_url(); ?>Images/menu-button.png" alt="Menu Button"></a>
				</td>
				<td>
					<div class="empty-slot"></div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
