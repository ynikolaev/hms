<html>
<head>
<title>Search</title>
<meta charset=”utf-8”>
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page">
<div id="login">
<h1>Here you can find users, <?php if($status == "admin"){
echo "$firstname ($status)" ?> <img src="<?php echo base_url(); ?>Images/admin.png" alt="Admin Logo" height="62" width="62"> <?php 
} else if ($status == "doctor"){
echo "$firstname ($status)" ?> <img src="<?php echo base_url(); ?>Images/doc.ico" alt="Doctor Logo" height="62" width="62"> <?php 
} else if ($status == "patient"){
echo "$firstname ($status)" ?> <img src="<?php echo base_url(); ?>Images/patient.png" alt="Patient Logo" height="62" width="62"> <?php 
}?>
</h1>
<h2>Enter the username:</h2>
<span id="errormsg"><?php echo form_error('username'); ?></span>
<form id="form" name="form" method="post">
<?php echo form_open('form'); ?> 
 <label>Username :<span id="message"> </span></label><br>
  <input id="username" name ="username" type="text" value="<?php echo set_value('username'); ?>" size="25" autocomplete="off"><br>
  <br><input id="submit" name="submit" type="submit" value="Submit">

<h3><a href="<?php echo base_url(); ?>index.php/Doctor/homepage">Back</a></h3>
</div>
</div>
</body>
</html>
