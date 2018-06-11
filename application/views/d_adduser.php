<html>
<head>
<title>Add User</title>
<meta charset=”utf-8”>
<link href="<?php echo base_url(); ?>/CSS/log.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>/CSS/normilizer.css" rel="stylesheet" type="text/css">
<script src ="<?php echo base_url(); ?>/JS/check_if_exists.js" type ="text/javascript"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js" type ="text/javascript"></script>
<script src ="<?php echo base_url(); ?>/JS/moment.js" type ="text/javascript"></script>
<script src ="<?php echo base_url(); ?>/JS/combodate.js" type ="text/javascript"></script>
<script>
$(document).ready(function(){
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
$(function(){
    $('#d_age').combodate({
    firstItem: 'name',
    maxYear: 2000,
    smartDays: true,
    format: 'YYYY-MM-D'
	});     
});
</script>
</head>
<body>
<div class="page">
<div id="register">
<h1>Add User</h1>
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
<span id="errormsg"><?php echo form_error('d_username'); ?></span>
<span id="errormsg"><?php echo form_error('d_fname'); ?></span>
<span id="errormsg"><?php echo form_error('d_pword'); ?></span>
<span id="errormsg"><?php echo form_error('d_conpword'); ?></span>
<span id="errormsg"><?php echo form_error('d_sname'); ?></span>
<span id="errormsg"><?php echo form_error('d_email'); ?></span>
<span id="errormsg"><?php echo form_error('d_age'); ?></span>
<span id="errormsg"><?php echo form_error('d_speciality'); ?></span>
<span id="errormsg"><?php echo form_error('d_gender'); ?></span>
<span id="errormsg"><?php echo form_error('d_address'); ?></span>
<span id="errormsg"><?php echo form_error('d_telephone'); ?></span>
<span id="errormsg"><?php echo form_error('a_username'); ?></span>
<span id="errormsg"><?php echo form_error('a_fname'); ?></span>
<span id="errormsg"><?php echo form_error('a_pword'); ?></span>
<span id="errormsg"><?php echo form_error('a_conpword'); ?></span>
<span id="errormsg"><?php echo form_error('a_sname'); ?></span>
<span id="errormsg"><?php echo form_error('a_email'); ?></span>

<!-- Patient form -->
<div id="patientform">
<h2>Add Patient user</h2>
<form id="form" name="form" method="post">
	 <?php echo form_open('form'); ?>
<table style="width:100%">
	<tr>
<td>  <label>Username :<span id="message"> </span></label><br>
  <div class="reg-line"><input id="username" name ="p_username" type="text" onblur="check_user_unique();" value="<?php echo set_value('p_username'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Password :</label><br>
  <div class="reg-line"><input id="pword" name="p_pword" type="password" value="<?php echo set_value('p_pword'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Confirm Password :</label><br>
  <div class="reg-line"><input id="conpword" name="p_conpword" type="password" value="<?php echo set_value('p_conpword'); ?>" size="25"></div>
  <br/>
</td>
	</tr>
<br>
	<tr>
  <td><label>Firstname :</label><br/>
  <div class="reg-line"><input id="fname" name="p_fname" type="text" value="<?php echo set_value('p_fname'); ?>" size="25"></div>
  <br>
</td>
  <td><label>Surname :</label><br>
  <div class="reg-line"><input id="sname" name="p_sname" type="text" value="<?php echo set_value('p_sname'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Email :</label><br>
  <div class="reg-line"><input id="email" name="p_email" type="text" value="<?php echo set_value('p_email'); ?>" size="25"></div>
  <br>
</td>
	</tr>
<tr>
  <td><label>DOB :</label><br/>
	  <div class="reg-line"><input type="text" id="age" data-template="D MMM YYYY" name="p_age" ></div>
   <br>
</td>
  <td><label>Address :</label><br>
  <div class="reg-line"><input id="address" name="p_address" type="text" value="<?php echo set_value('p_address'); ?>" size="25"></div>
  <br>
</td>
  <td><label>Telephone :</label><br>
  <div class="reg-line"><input id="telephone" name="p_telephone" type="text" value="<?php echo set_value('p_telephone'); ?>" size="25"></div>
  <br>
</td>
	</tr>
<tr>
  <td><label>Height :</label><br>
  <div class="reg-line"><input id="height" name="p_height" type="text" placeholder="cm" value="<?php echo set_value('p_height'); ?>" size="25"></div>
  <br>
</td>
  <td><label>Weight :</label><br>
  <div class="reg-line"><input id="weight" name ="p_weight" type="text" placeholder="kg" value="<?php echo set_value('p_weight'); ?>" size="25"></div>
  <br/>
</td>
<td>
  <div class="reg-line"><label>Gender :</label><br>
  <input type="radio" name="p_gender" value="M" <?php echo  set_radio('p_gender', 'M', TRUE); ?> /> Male
  <input type="radio" name="p_gender" value="F" <?php echo  set_radio('p_gender', 'F'); ?> /> Female
  </div>
</td>
</table>
<br>
<input id="addpatient" name="submit" type="submit" value="Add Patient"/>
</form>
</div>

<!-- Doctor form -->
<div id="doctorform">
<h2>Add Doctor user</h2>
<form id="form" name="form" method="post">
	 <?php echo form_open('form'); ?>
<table style="width:100%">
	<tr>
<td>  <label>Username :<span id="message2"> </span></label><br>
  <div class="reg-line"><input id="d_username" name ="d_username" type="text" onblur="check_doctor_unique();" value="<?php echo set_value('d_username'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Password :</label><br>
  <div class="reg-line"><input id="pword" name="d_pword" type="password" value="<?php echo set_value('d_pword'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Confirm Password :</label><br>
  <div class="reg-line"><input id="conpword" name="d_conpword" type="password" value="<?php echo set_value('d_conpword'); ?>" size="25"></div>
  <br/>
</td>
	</tr>
<br>
	<tr>
  <td><label>Firstname :</label><br/>
  <div class="reg-line"><input id="fname" name="d_fname" type="text" value="<?php echo set_value('d_fname'); ?>" size="25"></div>
  <br>
</td>
  <td><label>Surname :</label><br>
  <div class="reg-line"><input id="sname" name="d_sname" type="text" value="<?php echo set_value('d_sname'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Email :</label><br>
  <div class="reg-line"><input id="email" name="d_email" type="text" value="<?php echo set_value('d_email'); ?>" size="25"></div>
  <br>
</td>
	</tr>
<tr>
  <td><label>DOB :</label><br/>
	  <div class="reg-line"><input type="text" id="d_age" data-template="D MMM YYYY" name="d_age" ></div>
   <br>
</td>
  <td><label>Address :</label><br>
  <div class="reg-line"><input id="address" name="d_address" type="text" value="<?php echo set_value('d_address'); ?>" size="25"></div>
  <br>
</td>
  <td><label>Telephone :</label><br>
  <div class="reg-line"><input id="telephone" name="d_telephone" type="text" value="<?php echo set_value('d_telephone'); ?>" size="25"></div>
  <br>
</td>
	</tr>
	<tr>
  <td><label>Speciality :</label><br>
  <div class="reg-line"><select name="d_speciality" class="form-control">
	  <option value="">Choose Speciality</option>
	  <option value="">-----------------</option>
    <?php foreach($specialities as $each){ ?>
        <option value="<?php echo $each->speciality_id; ?>"><?php echo $each->name; ?></option>';
    <?php } ?>
</select></div>
  <br/>
</td>
<td>
  <div class="reg-line"><label>Gender :</label><br>
  <input type="radio" name="d_gender" value="M" <?php echo  set_radio('d_gender', 'M', TRUE); ?> /> Male
  <input type="radio" name="d_gender" value="F" <?php echo  set_radio('d_gender', 'F'); ?> /> Female
  </div>
</td>
<td>
</td>
	</tr>
</table>
<br>
<input id="adddoctor" name="submit" type="submit" value="Add Doctor"/>
</form>
</div>

<!-- Administrator form -->
<div id="adminform">
<h2>Add Administrator user</h2>
<form id="form" name="form" method="post">
	 <?php echo form_open('form'); ?>
<table style="width:100%">
	<tr>
<td>  <label>Username :<span id="message3"> </span></label><br>
  <div class="reg-line"><input id="a_username" name ="a_username" type="text" onblur="check_admin_unique();" value="<?php echo set_value('a_username'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Password :</label><br>
  <div class="reg-line"><input id="pword" name="a_pword" type="password" value="<?php echo set_value('a_pword'); ?>" size="25"></div>
  <br/>
</td>
  <td><label>Confirm Password :</label><br>
  <div class="reg-line"><input id="conpword" name="a_conpword" type="password" value="<?php echo set_value('a_conpword'); ?>" size="25"></div>
  <br/>
</td>
</table>
<br>
<input id="addadmin" name="submit" type="submit" value="Add Admin"/>
</form>
</div>
<h3><a href="<?php echo base_url(); ?>index.php/Doctor/a_deletep"> Back</a></h3>
</div>
</div>
</body>
</html>
