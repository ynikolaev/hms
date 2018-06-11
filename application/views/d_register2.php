<html>
<head>
<title>Registration</title>
<meta charset=”utf-8”>
<link href="<?php echo base_url(); ?>CSS/style.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div class="page">
<div id="register">
<h1>Registration</h1>
<!---action="<?php echo base_url();?>index.php/Doctor/insertrow"--->
<form id="form" name="form" method="post">
  <?php echo form_open('form'); ?>
  <label>Age :</label><br/>
  <span id="errormsg"><?php echo form_error('age'); ?></span>
  <input id="age" name="age" type="number" value="<?php echo set_value('age'); ?>" size="50"><br>
  <br>
  <label>Height :</label><br>
  <span id="errormsg"><?php echo form_error('height'); ?></span>
  <input id="height" name="height" type="number" value="<?php echo set_value('height'); ?>" size="50"><br>
  <br/>
  <label>Weight :</label><br>
  <span id="errormsg"><?php echo form_error('weight'); ?></span>
  <input id="weight" name ="weight" type="text" size="50"><br>
  <br/>
  <br>
  <input id="submit" name="submit" type="submit" value="Submit">
  <br><h3><a href="<?php echo base_url(); ?>index.php/Doctor/index">Back</a></h3>
</form>
</div>
</div>
</body>
</html>
