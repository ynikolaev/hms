<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hms_main extends CI_Controller {

function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
	$this->load->library('session');
	$this->load->library('form_validation');
	$this->load->helper('array');
	$this->load->helper('security');
    }
    
    
public function payments()
	{
		self::check_session();
		
		$id = $this->session->userdata('id');
		$status = $this->session->userdata('status');
		//echo $status;
		$information = array($this->mymodel->getInfo($id,$status));
		if(!$information){
			echo "DB connection error";
		} else {
			if ($status == "admin") {
				$username = $information[0]['username'];
				$data['status']=$status;
				$data['username']=$username;
			} else if ($status == "patient"){
				$firstname = $information[0]['firstname'];
				$surname = $information[0]['surname'];
				$gender = $information[0]['gender'];
				$data = [
					"firstname" => $firstname,
					"surname" => $surname,
					"status" => $status,
					"gender" => $gender
				];
			} else if ($status == "doctor"){
				$firstname = $information[0]['firstname'];
				$surname = $information[0]['surname'];
				$gender = $information[0]['gender'];
				$data = [
					"firstname" => $firstname,
					"d_surname" => $surname,
					"status" => $status,
					"gender" => $gender
				];
			}
		}
		$payment_status = "paid";
		$query = $this->mymodel->get_payments($status, $id, $payment_status);	
		if($query){
			//print_r($query);
			$data['payment_made'] = $query;
		} else {
			$data['payment_made'] = null;
		}
		$payment_status = "unpaid";
		$query2 = $this->mymodel->get_payments($status, $id, $payment_status);	
		if($query2){
			//print_r($query);
			$data['payment_notmade'] = $query2;
		} else {
			$data['payment_notmade'] = null;
		}
		$this->load->view('d_payments',$data);
	}

public function index()
	{
		if ( !$this->session->userdata('id')) {
		    $this->session->set_userdata('status','user');
		    $this->session->set_userdata('grayscale','0');
		    $this->session->set_userdata('grayscale-ie','0');
			$this->session->set_userdata('fontsize','1em');
	    }
		$this->load->view('d_splash');
	}
	
public function user_index()
	{
		if ( !$this->session->userdata('id')) {
		    $this->session->set_userdata('status','user');
	    }
		//grayscale(100%)
		//gray
		$gray_stat = '<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/off.png" alt="On/Off Switcher">';
		if ($this->session->userdata('grayscale') == 'grayscale(100%)'){
			$gray_stat = '<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/on.png" alt="On/Off Switcher">';
		} else {
			$gray_stat = '<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/off.png" alt="On/Off Switcher">';
		}
    	$data = [
	    	"grayscaleie" => $this->session->userdata('grayscale-ie'),
			"grayscale" => $this->session->userdata('grayscale'),
			"fontsize" => $this->session->userdata('fontsize'),
			"status" => $this->session->userdata('status'),
			"gray_stat" => $gray_stat
		];
	    $status = $this->session->userdata('status');
	    //echo $status;
	    //print_r($data);
		$this->load->view('d_index',$data);
	}

public function not_logged()
	{
		
		$this->load->view('d_not_logged');
	}

public function error()
	{
		
		$status = $this->session->userdata('status');
		//echo $status;
		if($status == 'patient' || $status == 'doctor' || $status == 'admin')
		{
			$url = "<h3><a href=\"homepage\">Back</a></h3>";
			$data['url']=$url;
		} else {
			$url = "<h3><a href=\"index\">Back</a></h3>";
			$data['url']=$url;
		}
		$this->load->view('d_error',$data);
	}

public function success()
	{
		
		self::check_session();
		$this->load->view('d_success');
	}

public function A_deletep()
	{
		self::check_session();
		
		self::if_admin();
		$status = "patient";
		$query = $this->mymodel->getUsers($status);		
		$data['patients'] = null;
		
		if($query){
			$data['patients'] = $query;
		} else {
			//echo "error";
		}
		
		$status = "doctor";
		$query = $this->mymodel->getUsers($status);		
		$data['doctors'] = null;
		
		if($query){
			$data['doctors'] = $query;
		} else {
			//echo "error";
		}
		
		$status = "admin";
		$query = $this->mymodel->getUsers($status);		
		$data['admin'] = null;
		
		if($query){
			$data['admin'] = $query;
		} else {
			//echo "error";
		}
		
		$this->load->view('d_deletep', $data);
	}

public function homepage()
	{	
		self::check_session();
		
		$id = $this->session->userdata('id');
		$status = $this->session->userdata('status');
		//echo $status;
		$information = array($this->mymodel->getInfo($id,$status));
		if(!$information){
			echo "DB connection error";
		}
		if ($status == "admin") {
			$username = $information[0]['username'];
			$data['status']=$status;
			$data['username']=$username;
			$this->load->view('d_homepage',$data);
		} else if ($status == "patient"){
			$firstname = $information[0]['firstname'];
			$surname = $information[0]['surname'];
			$gender = $information[0]['gender'];
			$data = [
				"firstname" => $firstname,
				"surname" => $surname,
				"status" => $status,
				"gender" => $gender
			];
			$this->load->view('d_homepage',$data);
		} else if ($status == "doctor"){
			$firstname = $information[0]['firstname'];
			$surname = $information[0]['surname'];
			$gender = $information[0]['gender'];
			$data = [
				"firstname" => $firstname,
				"d_surname" => $surname,
				"status" => $status,
				"gender" => $gender
			];
			$this->load->view('d_homepage',$data);
		}
	}

public function editdetails()
	{	
		self::check_session();
		
		$id = $this->session->userdata('id');
		$status = $this->session->userdata('status');
		if ($status == "patient"){
			$information = array($this->mymodel->getInfo($id,$status));
			$data['status']=$status;
			print_r ($information);
			$username = $information[0]['username'];
			$firstname = $information[0]['firstname'];
			$surname = $information[0]['surname'];
			$email = $information[0]['email'];
			$age = $information[0]['age'];
			$height = $information[0]['height'];
			$weight = $information[0]['weight'];
			$address = $information[0]['address'];
			$telephone = $information[0]['telephone'];
			$gender = $information[0]['gender'];
			$holders = [
				"username" => $username,
				"firstname" => $firstname,
				"surname" => $surname,
				"email" => $email,
				"age" => $newDate = date("d-m-Y", strtotime($age)),
				"height" => $height,
				"weight" => $weight,
				"status" => $status,
				"address" => $address,
				"telephone" => $telephone,
				"gender" => $gender
			];
			if ($this->form_validation->run('p_editprofile') == FALSE) { 
	 			$this->load->view('d_editdetails',$holders);
	 			//redirect('Doctor/editdetails');
	 		} else { 
				self::updaterow($id);
	 		}
		} else if ($status == "doctor") {
			$information = array($this->mymodel->getInfo($id,$status));
			$data['status']=$status;
			print_r ($information);
			$username = $information[0]['username'];
			$firstname = $information[0]['firstname'];
			$surname = $information[0]['surname'];
			$email = $information[0]['email'];
			$age = $information[0]['age'];
			$address = $information[0]['address'];
			$telephone = $information[0]['telephone'];
			$speciality = $information[0]['speciality'];
			$speciality_id = $information[0]['speciality_id'];
			$gender = $information[0]['gender'];
			$query = $this->mymodel->specialities_model();
			$holders = [
				"d_username" => $username,
				"d_firstname" => $firstname,
				"d_surname" => $surname,
				"d_email" => $email,
				"d_age" => $newDate = date("d-m-Y", strtotime($age)),
				"d_status" => $status,
				"d_address" => $address,
				"d_telephone" => $telephone,
				"d_speciality" => $speciality,
				"d_speciality_id" => $speciality_id,
				"specialities" => $query,
				"status" => $status,
				"gender" => $gender
			];
			if ($this->form_validation->run('d_editprofile') == FALSE) { 
	 			$this->load->view('d_editdetails',$holders);
	 			//redirect('Doctor/editdetails');
	 		} else { 
				self::updaterow($id);
	 		}
		}
	}

function updaterow($num)
	{ 	
		self::check_session();
		
		$id = $num;
		$data = array();
		$status = $this->session->userdata('status');
		$information = array($this->mymodel->getInfo($id,$status));
		print_r ($information);
		if ($this->input->post('submit') == 'Update Patient') {
			//$username = $information[0]['username'];
			$username = $this->input->post('p_username');
			//$firstname = $information[0]['firstname'];
			$firstname = $this->input->post('p_fname');
			//$surname = $information[0]['surname'];
			$surname = $this->input->post('p_sname');
			$password = $this->input->post('p_pword');
			$salt = $this->getRandString();
			$op=[
			    'salt' => $salt,
			    'cost' => 12
			];
			$hash = password_hash($password, PASSWORD_DEFAULT, $op);
			$password = $hash;
			//$email = $information[0]['email'];
			$email = $this->input->post('p_email');
			//$age = $information[0]['age'];
			$age = $this->input->post('p_age');
			//$height = $information[0]['height'];
			$height = $this->input->post('p_height');
			//$weight = $information[0]['weight'];
			$weight = $this->input->post('p_weight');
			$gender = $this->input->post('p_gender');
			$address = $this->input->post('p_address');
			$telephone = $this->input->post('p_telephone');
			
			if ($this->input->post('p_username') == "" || $this->input->post('p_username') == " ")
			{
				$username = $information[0]['username'];
			}
			if ($this->input->post('p_pword') == "" || $this->input->post('p_pword') == " ")
			{
				$password = $information[0]['password'];
			}
			if ($this->input->post('p_fname') == "" || $this->input->post('p_fname') == " ")
			{
				$firstname = $information[0]['firstname'];
			}
			if ($this->input->post('p_sname') == "" || $this->input->post('p_sname') == " ")
			{
				$surname = $information[0]['surname'];
			}
			if ($this->input->post('p_email') == "" || $this->input->post('p_email') == " ")
			{
				$email = $information[0]['email'];
			}
			if ($this->input->post('p_age') == "" || $this->input->post('p_age') == " ")
			{
				$age = $information[0]['age'];
			}
			if ($this->input->post('p_height') == "" || $this->input->post('p_height') == " ")
			{
				$height = $information[0]['height'];
			}
			if ($this->input->post('p_weight') == "" || $this->input->post('p_weight') == " ")
			{
				$weight = $information[0]['weight'];
			}
			if ($this->input->post('p_gender') == "" || $this->input->post('p_gender') == " ")
			{
				$gender = $information[0]['gender'];
			}
			if ($this->input->post('p_address') == "" || $this->input->post('p_address') == " ")
			{
				$address = $information[0]['address'];
			}
			if ($this->input->post('p_telephone') == "" || $this->input->post('p_telephone') == " ")
			{
				$telephone = $information[0]['telephone'];
			}
	    	$data = [
				"username" => strtolower($username),
				"password" => $password
	    	];
	    	$data2 = [
				"firstname" => $firstname,
				"lastname" => $surname,
				"email" => $email,
				"dob" => $age,
				"height" => $height,
				"weight" => $weight,
				"gender" => $gender,
				"address" => $address,
				"telephone" => $telephone
	    	];
			$this->mymodel->d_update($data,$data2,$id,$status);
			//$this->load->view('d_editdetails',$holders);
			$this->session->set_tempdata('item', 'Record was updated!', 1);
			//$this->session->set_flashdata('item', 'Record was updated!');
			redirect('Hms_main/editdetails');
			//echo "<p>Row updated</p><br><p>You can now back to the prev page</p><a href=\"/CodeIgniter/Hms_main/editdetails\"> Back</a>";
		} else if ($this->input->post('submit') == 'Update Doctor'){
			//$username = $information[0]['username'];
			$username = $this->input->post('d_username');
			//$firstname = $information[0]['firstname'];
			$firstname = $this->input->post('d_fname');
			//$surname = $information[0]['surname'];
			$surname = $this->input->post('d_sname');
			$password = $this->input->post('d_pword');
			$salt = $this->getRandString();
			$op=[
			    'salt' => $salt,
			    'cost' => 12
			];
			$hash = password_hash($password, PASSWORD_DEFAULT, $op);
			$password = $hash;
			//$email = $information[0]['email'];
			$email = $this->input->post('d_email');
			//$age = $information[0]['age'];
			$age = $this->input->post('d_age');
			$gender = $this->input->post('d_gender');
			$address = $this->input->post('d_address');
			$telephone = $this->input->post('d_telephone');
			$speciality = $this->input->post('d_speciality');
			
			if ($this->input->post('d_username') == "" || $this->input->post('d_username') == " ")
			{
				$username = $information[0]['username'];
			}
			if ($this->input->post('d_pword') == "" || $this->input->post('d_pword') == " ")
			{
				$password = $information[0]['password'];
			}
			if ($this->input->post('d_fname') == "" || $this->input->post('d_fname') == " ")
			{
				$firstname = $information[0]['firstname'];
			}
			if ($this->input->post('d_sname') == "" || $this->input->post('d_sname') == " ")
			{
				$surname = $information[0]['surname'];
			}
			if ($this->input->post('d_email') == "" || $this->input->post('d_email') == " ")
			{
				$email = $information[0]['email'];
			}
			if ($this->input->post('d_age') == "" || $this->input->post('d_age') == " ")
			{
				$age = $information[0]['age'];
			}
			if ($this->input->post('d_gender') == "" || $this->input->post('d_gender') == " ")
			{
				$gender = $information[0]['gender'];
			}
			if ($this->input->post('d_address') == "" || $this->input->post('d_address') == " ")
			{
				$address = $information[0]['address'];
			}
			if ($this->input->post('d_telephone') == "" || $this->input->post('d_telephone') == " ")
			{
				$telephone = $information[0]['telephone'];
			}
			if ($this->input->post('d_speciality') == "" || $this->input->post('d_speciality') == " ")
			{
				$telephone = $information[0]['speciality_id'];
			}
	    	$data = [
				"username" => strtolower($username),
				"password" => $password
	    	];
	    	$data2 = [
				"firstname" => $firstname,
				"lastname" => $surname,
				"email" => $email,
				"dob" => $age,
				"gender" => $gender,
				"address" => $address,
				"telephone" => $telephone,
				"speciality_id" => $speciality
	    	];
			$this->mymodel->d_update($data,$data2,$id,$status);
			//$this->load->view('d_editdetails',$holders);
			$this->session->set_flashdata('item', 'Record was updated!');
			redirect('Hms_main/editdetails');
			//echo "<p>Row updated</p><br><p>You can now back to the prev page</p><a href=\"/CodeIgniter/Hms_main/editdetails\"> Back</a>";
		}
	}

public function check_session()
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect('Hms_main/error','refresh');
		}
	}

public function if_admin()
	{
		if($this->session->userdata('status') != 'admin'){
			redirect('Hms_main/error','refresh');
		}
	}

public function if_doctor()
	{
		if($this->session->userdata('status') != 'admin' && $this->session->userdata('status') != 'doctor'){
			redirect('Hms_main/error','refresh');
		}
	}

public function register()
	{
         	if ($this->form_validation->run('patient') == FALSE) { 
         	$this->load->view('d_register'); 
         	} 
         	else { 
			self::add_user();
         	} 
	}

public function login()
	{
		$gray_stat = '<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/off.png" alt="On/Off Switcher">';
		if ($this->session->userdata('grayscale') == 'grayscale(100%)'){
			$gray_stat = '<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/on.png" alt="On/Off Switcher">';
		} else {
			$gray_stat = '<img class="mob-menu-switcher" src="http://hms-ibear.co.uk/Images/off.png" alt="On/Off Switcher">';
		}
    	$data = [
	    	"grayscaleie" => $this->session->userdata('grayscale-ie'),
			"grayscale" => $this->session->userdata('grayscale'),
			"fontsize" => $this->session->userdata('fontsize'),
			"status" => $this->session->userdata('status'),
			"gray_stat" => $gray_stat
		];
		//print_r($data);
     	if ($this->form_validation->run('login') == FALSE) { 
     		$this->load->view('d_login',$data); 
     	} else { 
			self::login_check();
     	} 
	}

	public function login_check()
	{
		
		$this->load->helper('form');
		$username =  strtolower($this->input->post('uname'));
		$password =  $this->input->post('pword');
		$query = $this->mymodel->signing_in($username);
		$hash = $this->mymodel->password_hash($username);
			if(password_verify($password,$hash))
			{
				$query = $this->mymodel->create_session($username,$query);
				$this->session->set_userdata($query);
				//print_r($query);
				redirect('Splash/splash_log');
			} else {
				//echo "<p>You are NOT logged in</p><a href=\"/CodeIgniter/Hms_main/index\"> Back</a>";
				redirect('Hms_main/not_logged','refresh');
			}
	}

public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('status');
		redirect('Hms_main/index','refresh');
	}

function getRandString(){
    $letter = range('a', 'z');
    $number = range(0, 9);

    $letter = implode('',$letter);
    $letter = $letter.strtoupper($letter).implode('',$number);

    $randStr = '';
    for ($i = 0; $i < 22; $i++){
        $randStr .= $letter[rand(0, strlen($letter) - 1)];
    }
    return $randStr;
}


public function a_adduser()
	{
		
		$query = $this->mymodel->specialities_model();
		$data['specialities'] = null;
		
		if($query){
			$data['specialities'] = $query;
		}
		if ($this->input->post('submit') == 'Add Patient'|| $this->input->post('submit') == 'Submit'){
			if ($this->form_validation->run('patient')== false) {
			$this->load->view('d_adduser',$data); 
			} else {
				self::add_user();
			}
		} else if ($this->input->post('submit') == 'Add Doctor'){
			if ($this->form_validation->run('doctor')== false) {
			$this->load->view('d_adduser',$data); 
			} else {
				self::add_user();
			}
		} else if($this->input->post('submit') == 'Add Admin') {
			if ($this->form_validation->run('admin')== false) {
			$this->load->view('d_adduser',$data); 
			} else {
				self::add_user();
			}
			} else {
			$this->load->view('d_adduser',$data);
		}
	}
	
public function add_user() {
	
	if ($this->input->post('submit') == 'Add Patient' || $this->input->post('submit') == 'Submit') {
		$status = "patient";
		$data = [];
		$data2 = [];
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
			"username" => $this->security->xss_clean($username),
			"password" => $this->security->xss_clean($password),
			"user_type" => $this->security->xss_clean($status)
			];
		$data2 = [
			"firstname" => $this->security->xss_clean($this->input->post('p_fname')),
			"lastname" => $this->security->xss_clean($this->input->post('p_sname')),
			"email" => $this->security->xss_clean($this->input->post('p_email')),
			"dob" => $this->security->xss_clean($this->input->post('p_age')),
			"weight" => $this->security->xss_clean($this->input->post('p_weight')),
			"height" => $this->security->xss_clean($this->input->post('p_height')),
			"gender" => $this->security->xss_clean($this->input->post('p_gender')),
			"address" => $this->security->xss_clean($this->input->post('p_address')),
			"telephone" => $this->security->xss_clean($this->input->post('p_telephone')),
			"user_id" => ''
			];
		$this->mymodel->d_insert($status,$username,$data,$data2);
		$status = $this->session->userdata('status');
			if($status == "admin"){
				$this->session->set_flashdata('add_user', 'New Patient was registered!');
				redirect('Hms_main/a_deletep','refresh');
			} else {
				redirect('Splash/splash_reg','refresh');
			}	
	} else if ($this->input->post('submit') == 'Add Doctor') {
		$status = "doctor";
		$password =  $this->input->post('d_pword');
		$salt = $this->getRandString();
		$op=[
			'salt' => $salt,
			'cost' => 12
			];
		$hash = password_hash($password, PASSWORD_DEFAULT, $op);
		$password = $hash;
		$username = strtolower($this->input->post('d_username'));
		//$user_id = $this->mymodel->count_id($username);
		$data = [
			"username" => $this->security->xss_clean($username),
			"password" => $this->security->xss_clean($password),
			"user_type" => $this->security->xss_clean($status)
			];
		$data2 = [
			"firstname" => $this->security->xss_clean($this->input->post('d_fname')),
			"lastname" => $this->security->xss_clean($this->input->post('d_sname')),
			"email" => $this->security->xss_clean($this->input->post('d_email')),
			"dob" => $this->security->xss_clean($this->input->post('d_age')),
			"gender" => $this->security->xss_clean($this->input->post('d_gender')),
			"address" => $this->security->xss_clean($this->input->post('d_address')),
			"telephone" => $this->security->xss_clean($this->input->post('d_telephone')),
			"speciality_id" => $this->security->xss_clean($this->input->post('d_speciality'))
			];
		$this->mymodel->d_insert($status,$username,$data,$data2);
		$status = $this->session->userdata('status');
			if($status == "admin"){
				$this->session->set_flashdata('add_user', 'New Doctor was registered!');
				redirect('Hms_main/a_deletep','refresh');
			} else {
				redirect('Hms_main/success','refresh');
			}	
	} else if ($this->input->post('submit') == 'Add Admin') {
		$status = "admin";
		$password =  $this->input->post('a_pword');
		$salt = $this->getRandString();
		$op=[
			'salt' => $salt,
			'cost' => 12
			];
		$hash = password_hash($password, PASSWORD_DEFAULT, $op);
		$password = $hash;
		$username = strtolower($this->input->post('a_username'));
		//$user_id = $this->mymodel->count_id($username);
		$data = [
			"username" => $this->security->xss_clean($username),
			"password" => $this->security->xss_clean($password),
			"user_type" => $this->security->xss_clean($status)
			];
		$data2=[];
		$this->mymodel->d_insert($status,$username,$data,$data2);
		$status = $this->session->userdata('status');
			if($status == "admin"){
				$this->session->set_flashdata('add_user', 'New Admin was registered!');
				redirect('Hms_main/a_deletep','refresh');
			} else {
				redirect('Hms_main/success','refresh');
			}	

		} else {
		echo "Error";
	}
}

}
?>
