<html>
<head>
<title>Diagnosis</title>
<meta charset=”utf-8”>
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page">
<div id="register">
<h1>Diagnosis <?php if($status == "admin"){
echo "made by doctors, not you, $username" ?> <img src="<?php echo base_url(); ?>Images/admin.png" alt="Admin Logo" height="62" width="62"> <?php 
} else if ($status == "doctor"){
echo "that you made, $firstname" ?> <img src="<?php echo base_url(); ?>Images/doc.ico" alt="Doctor Logo" height="62" width="62"> <?php 
} else if ($status == "patient"){
echo "for ypu, $firstname" ?> <img src="<?php echo base_url(); ?>Images/patient.png" alt="Patient Logo" height="62" width="62"> <?php 
}?>
</h1>
<?php
	//print_r($diagnosis);
	if(empty($diagnosis)){
	echo "<h2>There is no diagnosis that was made by you!</h2>";
	echo "<h3><a href=\"/CodeIgniter/index.php/Doctor/homepage\"> Back</a></h3>";
	}
	if(is_array($diagnosis) && count($diagnosis) ) {
?>
	<table>
		<tr>
		<th>Username</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Diagnosis</th>
		<th>Description</th>
		<th>Signed By</th>
		</tr>
	<?php foreach($diagnosis as $loop){ ?>				 
		<tr>
		<td>
		<span><?=$loop->username;?></span>
		</td>
		<td>
		<span><?=$loop->firstname;?></span>
		</td>
		<td>
		<span><?=$loop->surname;?></span>
		</td>
		<td>
		<span><?=$loop->name;?></span>
		</td>
		<td>
		<span><?=$loop->description;?></span>
		</td>
		<td>
		<span><?=$loop->signed_by;?></span>
		</td>
		</tr>
	<?php }?>	
	</table>
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/homepage"> Back</a></h3>
</div>
<?php }?>
</div>
</body>
</html>
