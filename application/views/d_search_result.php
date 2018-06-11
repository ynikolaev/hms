<html>
<head>
<title>Search Results</title>
<meta charset=”utf-8”>
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page">
<div id="login">
<h1>Users have been found: </h1>
<?php
	print_r($users);
	if(empty($users)){
	echo "<h2>There is no users found!</h2>";
	echo "<h3><a href=\"/CodeIgniter/index.php/Doctor/search\"> Back</a></h3>";
	}
	if(is_array($users) && count($users) ) {
?>
	<table>
		<tr>
		<th>Username</th>
		<th>Firstname</th>
		<th>Surname</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Status</th>
		</tr>
	<?php foreach($users as $loop){ ?>				 
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
		<span><?=$loop->email;?></span>
		</td>
		<td>
		<span><?=$loop->gender;?></span>
		</td>
		<td>
		<span><?=$loop->status;?></span>
		</td>
		</tr>
	<?php }?>	
	</table>
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/search">Back</a></h3>
</div>
<?php }?>
</div>
</body>
</html>
