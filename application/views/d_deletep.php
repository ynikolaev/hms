<html>
<head>
<title>Manage Users</title>
<meta charset=”utf-8”>
<link href="<?php echo base_url(); ?>CSS/log.css" rel="stylesheet" type="text/css">
<script src ="<?php echo base_url(); ?>JS/delete_patient.js" type ="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div class="page">
<div id="login">
<h1>Manage Users <img src="<?php echo base_url(); ?>Images/user.png" alt="Doctor Logo" height="62" width="62"></h1> 
<h3 id="message2"></h3>
<?php
if($this->session->flashdata('item')) {
  $addusrmessage = $this->session->flashdata('item');
} else {
$addusrmessage = "";
}
?>
<h3><?php echo $addusrmessage ?></h3>
<?php
if($this->session->flashdata('add_user')) {
  $message = $this->session->flashdata('add_user');
} else {
$message = "";
}
?>
<h3><?php echo $message ?></h3>

<?php
	print_r($patients);
	if(is_array($patients) && count($patients) ) {
?>
<div>
	<table>
		<caption><h2>Patients</h2></caption>
		<tr>
		<th>Username</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
	<?php foreach($patients as $loop){ ?>				 
		<tr id="<?=$loop->user_id;?>">
		<td>
		<span><?=$loop->username;?></span>
		</td>
		<td>
		<span><?=$loop->firstname;?></span>
		</td>
		<td>
		<span><?=$loop->lastname;?></span>
		</td>
		<td>
		<span><?=$loop->email;?></span>
		</td>
		<td>
		<span><?=$loop->user_type;?></span>
		</td>
		<td>
		<b><a href="javascript:;" onclick="confirm_box(<?=$loop->user_id;?>)" >Delete</a></b>
		</td>
		</tr>
	<?php }?>	
	</table>
</div>
<?php } else { echo "<center><h2>No Patients</h2></center>"; }?>
<br>
<?php
	//print_r($doctors);
	if(is_array($doctors) && count($doctors) ) {
?>
<div>
	<table>
		<caption><h2>Doctors</h2></caption>
		<tr>
		<th>Username</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Speciality</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
	<?php foreach($doctors as $loop){ ?>				 
		<tr id="<?=$loop->user_id;?>">
		<td>
		<span><?=$loop->username;?></span>
		</td>
		<td>
		<span><?=$loop->firstname;?></span>
		</td>
		<td>
		<span><?=$loop->lastname;?></span>
		</td>
		<td>
		<span><?=$loop->email;?></span>
		</td>
		<td>
		<span><?=$loop->name;?></span>
		</td>
		<td>
		<span><?=$loop->user_type;?></span>
		</td>
		<td>
		<b><a href="javascript:;" onclick="confirm_box(<?=$loop->user_id;?>)" >Delete</a></b>
		</td>
		</tr>
	<?php }?>	
	</table>
</div>
<?php } else { echo "<center><h2>No Doctors</h2></center>"; }?>
<br>
<?php
	//print_r($doctors);
	if(is_array($admin) && count($admin) ) {
?>
<div>
	<table>
		<caption><h2>Administrators</h2></caption>
		<tr>
		<th>id</th>
		<th>Username</th>
		<th>Status</th>
		<th>Action</th>
		</tr>
	<?php foreach($admin as $loop){ ?>				 
		<tr id="<?=$loop->user_id;?>">
		<td>
		<span><?=$loop->user_id;?></span>
		</td>
		<td>
		<span><?=$loop->username;?></span>
		</td>
		<td>
		<span><?=$loop->user_type;?></span>
		</td>
		<td>
		<b><a href="javascript:;" onclick="confirm_box(<?=$loop->user_id;?>)" >Delete</a></b>
		</td>
		</tr>
	<?php }?>	
	</table>
</div>
<?php } else { echo "<center><h2>No Doctors</h2></center>"; }?>
<br>
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/a_adduser"> Add</a></h3>
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/homepage"> Back</a></h3>
</div>
</body>
</html>
