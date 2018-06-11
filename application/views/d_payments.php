<html>
<head>
<title>HMS: Payments</title>
<meta charset=”utf-8”>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/navigation.js" type ="text/javascript"></script>
<script src="<?php echo base_url(); ?>JS/get_bills.js" type ="text/javascript"></script>
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
				<center><img id="nogifPlace" src="<?php echo base_url(); ?>Images/logo3payments.png" alt="iBear Picture"> </center>
				<center><img id="gifPlace" src="<?php echo base_url(); ?>Images/logo3payments.png" alt="iBear Picture"> </center>
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
		<!---Left Side -->
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
		<!----------------->
		<!---Right Side --->
<div id="right_mySidenav" class="right_sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav_right()">&times;</a>
  <center><img id="ajax-bill_pic" src="<?php echo base_url(); ?>Images/bill.png" alt="Bill Icon"></center>
	  <p id="ajax-bill_id"></p>
	    <p id="ajax-bill_description"></p>
	      <p id="ajax-bill_amount"></p>
	        <p id="ajax-bill_date"></p>
</div>
		<!----------------->
	<br>	
	<div class="container" onclick="closeNav()">
		
		<!---------- PAID BILLS ----------->
<?php
	//print_r($payment_made);
	if(is_array($payment_made) && count($payment_made) ) {
		$last_key = array_search(end($payment_made), $payment_made);
?>
	<table class="payment-tab">
		<caption><b>Paid Bills</b></caption>
		<tr>
		<th class="payment-td-hide">Date</th>
		<th>Description</th>
		<th>Cost</th>
		<th>Bill</th>
		</tr>
	<?php foreach($payment_made as $key => $loop){
			//print_r($loop);
	?>				 
		<tr>
		<td class="payment-td-hide" <?php if(!$loop['bill_id']) echo 'colspan="2"';?>><?php echo $loop['bill_id'] ? $loop['bill_id'] : '<strong style="color:red;">Total</strong>';?></td>
		<?php if($loop['bill_id']){?>
		<td class="payment-td" <?php if(!$loop['bill_description']) echo 'colspan="1"';?>>
		<?php echo $loop['bill_description'] ? $loop['bill_description'] : '<strong style="color:red;">Total</strong>';?>
		</td>
		 <?php }?> 
		<td class="total-td" bgcolor="<?php echo !$loop['bill_description'] ? '#E9E0DB' : '#F9F6F4';?>" ><?php if($key == $last_key) { echo '<strong style="font-size:1.5em;"><span style="color:red;">Total: </span>'.$loop['profit'].' £</strong>'; } else { echo $loop['profit']." £";}?></td>
		<td class="quest-td">
			<?php if ($key == $last_key) {
				echo ""; } else { ?>
					<a href="javascript:void(0);" onclick="get_bills('<?php echo $loop['bill_id']?>')"><img class="payment-quest" src="<?php echo base_url(); ?>Images/quest.png" alt="Question Icon"></a>
				<?php } ?>
		</td>
		</tr>
	<?php }?>	
	</table>
<?php } else { echo "<br><center><h2>No Paid Bills Found</h2></center>"; }?>

		<!------------------------------>
		<!---------- UNPAID BILLS ----------->
<?php
	//print_r($payment_made);
	if(is_array($payment_notmade) && count($payment_notmade) ) {
		$last_key = array_search(end($payment_notmade), $payment_notmade);
?>
	<table class="payment-tab">
		<caption><b>Unpaid Bills</b></caption>
		<tr>
		<th class="payment-td-hide">Date</th>
		<th>Description</th>
		<th>Cost</th>
		<th>Bill</th>
		</tr>
	<?php foreach($payment_notmade as $key => $loop){
			//print_r($loop);
	?>				 
		<tr>
		<td class="payment-td-hide" <?php if(!$loop['bill_id']) echo 'colspan="2"';?>><?php echo $loop['bill_id'] ? $loop['bill_id'] : '<strong style="color:red;">Total</strong>';?></td>
		<?php if($loop['bill_id']){?>
		<td class="payment-td" <?php if(!$loop['bill_description']) echo 'colspan="1"';?>>
		<?php echo $loop['bill_description'] ? $loop['bill_description'] : '<strong style="color:red;">Total</strong>';?>
		</td>
		 <?php }?> 
		<td class="total-td" bgcolor="<?php echo !$loop['bill_description'] ? '#E9E0DB' : '#F9F6F4';?>" ><?php if($key == $last_key) { echo '<strong style="font-size:1.5em;"><span style="color:red;">Total: </span>'.$loop['profit'].' £</strong>'; } else { echo $loop['profit']." £";}?></td>
		<td class="quest-td">
			<?php if ($key == $last_key) {
				echo ""; } else { ?>
					<a href="javascript:void(0);" onclick="get_bills('<?php echo $loop['bill_id']?>')"><img class="payment-quest" src="<?php echo base_url(); ?>Images/quest.png" alt="Question Icon"></a>
				<?php } ?>
		</td>
		</tr>
	<?php }?>	
	</table>

<?php } else { echo "<br><center><h2>No Paid Bills Found</h2></center>"; }?>		

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
					<a href="javascript:void(0);" onclick="openNav('payments')"><img id="menu-button" src="<?php echo base_url(); ?>Images/menu-button.png" alt="Menu Button"></a>
				</td>
				<td>
					<div class="empty-slot"></div>
				</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>