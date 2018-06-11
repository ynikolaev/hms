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
</script>
</head>
<body>
<div class="page">
<div id="register">
<h1>Add User</h1>
<!--<?php
if($this->session->flashdata('add_user')) {
  $message = $this->session->flashdata('add_user');
} else {
$message = "";
}
?>
<h3><?php echo $message ?></h3>-->
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
<span id="errormsg"><?php echo form_error('register_hidden'); ?></span>
<!-- Patient form -->
<div id="patientform">
<h2>Add Patient user</h2>
<form id="form" name="form" method="post">
	 <?php echo form_open('form'); ?>
<span id="errormsg"><?php if (isset($patient_errors)) echo $patient_errors; ?></span>
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
<input name="Patient" type="submit" value="Add Patient"/>
</form>
</div>

<!-- Doctor form -->
<div id="doctorform">
<h2>Add Doctor user</h2>
<form>
<input type="hidden" name="register_hidden" value="register-whatever">
<input name="register_email" />
<input type="submit" value="Add Doctor" />
</form>
</div>

<!-- Administrator form -->
<div id="adminform">
<h2>Add Administrator user</h2>
<form>
<span id="errormsg"><?php if (isset($admin_errors)) echo $admin_errors; ?></span>
<input type="hidden" name="register_hidden" value="register-whatever">
<input name="register_email" />
<input type="submit" value="Add Admin" />
</form>
</div>

</div>
</div>
</body>
</html>

-------------------------



public function add_user()
	{
		//$this->load->view('d_adduser');
		if ($this->input->post('submit') == 'Patient') {
			if ($this->form_validation->run('register')== false) {
				$this->load->view('d_adduser');
        		} else {
	        	$status = "patient";
				$password =  $this->input->post('p_pword');
				$salt = $this->getRandString();
				$op=[
				'salt' => $salt,
				'cost' => 12
				];
				$hash = password_hash($password, PASSWORD_DEFAULT, $op);
				$password = $hash;
				$username = strtolower($this->input->post('p_username'));
				//$user_id = $this->mymodel->count_id($username);
				$data = [
				"username" => $username,
				"user_status" => $status
				];
				$data2 = [
				"username" => $username,
				"password" => $password,
				"firstname" => $this->input->post('p_fname'),
				"lastname" => $this->input->post('p_sname'),
				"email" => $this->input->post('p_email'),
				"dob" => $this->input->post('p_age'),
				"weight" => $this->input->post('p_weight'),
				"height" => $this->input->post('p_height'),
				"gender" => $this->input->post('p_gender'),
				"address" => $this->security->xss_clean($this->input->post('p_address')),
				"telephone" => $this->input->post('p_telephone'),
				"user_id" => ''
				];
				$this->mymodel->d_insert($status,$username,$data,$data2);
				//$this->session->set_flashdata('add_user', 'Record was inserted!');
				redirect('index.php/Doctor/index');
	        	}
	        }
			elseif ($this->input->post('submit') == 'Add Doctor') {
			if ($this->form_validation->run('test') == false) {
				$this->load->view('d_adduser');
				echo "error";
        		} else {
	        	//$data['doctor_errors'] = validation_errors();
	        	redirect('index.php/Doctor/index');
	        	}
	        }
	        elseif ($this->input->post('submit') == 'Add Admin') {
			if ($this->form_validation->run('register')) {
				//process form
        		} else {
	        	//$data['admin_errors'] = validation_errors();
	        	}
	        }

	}
	
	
	
<table style="width:100%">
	<tr>
<td><label>Username :</label><br>
  <div class="reg-line"><input id="username" name ="p_username" type="text" onblur="check_user_unique();" value="<?php echo set_value('p_username'); ?>" size="25"></div>
  <br/>
</td>
  <td>
	  <span id="message"> </span>
</td>
  <td>
	<label>Password :</label><br>
  <div class="reg-line"><input id="pword" name="p_pword" type="password" value="<?php echo set_value('p_pword'); ?>" size="25"></div>
  <br/>
	<label>Confirm Password :</label><br>
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
</td>
	</tr>
<tr>
  <td><label>DOB :</label><br/>
	  <div class="reg-time"><input type="text" id="age" data-template="D MMM YYYY" name="p_age" ></div>
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



<div id="menu">
    <ul>
        <li><center><img id="menu-button" src="<?php echo base_url(); ?>Images/menu-button.png" alt="Menu Button"></center>
                <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Disclaimer</a></li>
                </ul>
        </li> 
    </ul>
</div>


	ul.topnav li:not(:first-child) {display: none;}
	ul.topnav li.icon {
	float: right;
	display: inline-block;
	}
	
	ul.topnav.responsive {position: relative;}
	ul.topnav.responsive li.icon {
		position: absolute;
		right: 0;
		top: 0;
	}
	ul.topnav.responsive li {
		float: none;
		display: inline;
	}
	ul.topnav.responsive li a {
		display: block;
		text-align: left;
	}	
	
	
	
INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B002','Treatment/Consultation','40');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B003','Treatment','33');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B004','Recipe','20');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B005','Treatment','40');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B006','Surgery','50');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B007','Treatment','35');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B008','Consultation','10');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B009','Surgery/Consultation','125');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B010','Treatment','35');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B011','Treatment/Consultation','40');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B012','Surgery','55');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B013','Consultation','5');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B014','Consultation','5');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B015','Treatment','32');

INSERT INTO Bills (bill_id, bill_description, bill_amount) VALUES ('B016','Consultation','5');


SELECT bill_description, date, SUM(bill_amount) AS profit
       FROM Bills
       GROUP BY MONTH(date) ASC, bill_description ASC WITH ROLLUP;
       
SELECT bill_description, date, SUM(bill_amount) AS profit
FROM Bills
GROUP BY MONTH(date) ASC, bill_description ASC WITH ROLLUP;

//1//6//11

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2016-11-01','paid','1','B001');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('','','unpaid','1','B002');
---------
INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('card','2016-11-13','paid','6','B003');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2016-11-15','paid','11','B004');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('','','unpaid','11','B005');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2016-11-21','paid','1','B006');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('','','unpaid','6','B007');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2016-11-28','paid','6','B008');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('card','2016-12-01','paid','11','B009');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2016-12-06','paid','11','B010');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2016-12-15','paid','1','B011');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('','','unpaid','1','B012');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2017-01-03','paid','6','B013');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2017-01-03','paid','1','B014');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2017-01-04','paid','1','B015');

INSERT INTO Payments (payment_type, payment_date, payment_status, p_user_id, bill_id) VALUES ('cash','2017-01-04','paid','1','B016');

//////////////////////
SELECT Patients.firstname, Patients.lastname, Payments.payment_type, Payments.payment_date, COALESCE(Bills.bill_description,"Total:") AS description, Bills.date, SUM(Bills.bill_amount) AS profit
FROM Patients, Bills, Payments
WHERE Patients.user_id = Payments.p_user_id
AND Bills.bill_id = Payments.bill_id
AND Payments.payment_status = "paid"
GROUP BY Patients.lastname ASC, Bills.bill_description ASC WITH ROLLUP;

SELECT Bills.bill_id, Payments.Payment_id, Patients.firstname, Patients.lastname, Payments.payment_type, Payments.payment_date, Bills.bill_description, Bills.bill_date, SUM(Bills.bill_amount) AS profit
			FROM Patients, Bills, Payments
			WHERE Bills.bill_id = Payments.bill_id
			AND Payments.payment_status = "paid"
			GROUP BY Bills.bill_date ASC WITH ROLLUP;
			
SELECT Payments.Payment_id, Patients.firstname, Patients.lastname, Payments.payment_type, Payments.payment_date, Bills.bill_description, SUM(Bills.bill_amount) AS profit, Bills.bill_id
			FROM Patients, Bills, Payments
			WHERE Bills.bill_id = Payments.bill_id
			AND Payments.payment_status = "paid"
			GROUP BY Bills.bill_description ASC WITH ROLLUP;
			
SELECT Payments.payment_date, Bills.bill_description, SUM(Bills.bill_amount) AS profit
			FROM Patients, Bills, Payments
			WHERE Bills.bill_id = Payments.bill_id
			AND Payments.payment_status = 'paid'
			GROUP BY Bills.bill_id DESC WITH ROLLUP;			
			
			
//COUNT BILLS
SELECT COUNT(bill_id) AS total_bills FROM (
			SELECT Bills.bill_id, Payments.payment_date, Bills.bill_description, SUM(Bills.bill_amount) AS profit
			FROM Patients, Bills, Payments
			WHERE Payments.p_user_id = "1"
			AND Patients.user_id = "1"
			AND Bills.bill_id = Payments.bill_id
			AND Payments.payment_status = "paid"
			GROUP BY Payments.payment_date, Bills.bill_description ASC
			) AS alies;