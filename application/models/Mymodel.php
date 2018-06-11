<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

	function __construct() {
	parent::__construct();
	}
	
	public function get_payments($status, $id, $payment_status){
		if ($status == "patient"){
			$this->patient_db = $this->load->database('patient', TRUE);
			$sql = "SELECT Payments.payment_date, Bills.bill_description, Bills.bill_id, Bills.bill_amount, Bills.bill_date, SUM(Bills.bill_amount) AS profit
			FROM Patients, Bills, Payments
			WHERE Payments.p_user_id = '$id'
			AND Patients.user_id = '$id'
			AND Bills.bill_id = Payments.bill_id
			AND Payments.payment_status = '$payment_status'
			GROUP BY Bills.bill_id DESC WITH ROLLUP;";
			$query = $this->patient_db->query($sql)->result_array();
		}
		return $query;
	}
	
	public function get_bills($bill){
		$sql = "SELECT bill_id, bill_description, bill_amount, DATE_FORMAT(bill_date, '%d/%m/%Y') AS bill_date from Bills where Bills.bill_id = '$bill'";
		$query = $this->db->query($sql)->result_array();
		return $query;
	}

	function getInfo ($id,$status)
	{
		if ($status == "patient"){
			$this->patient_db = $this->load->database('patient', TRUE);
			$this->patient_db->select('UserAccount.*,Patients.*');
			$this->patient_db->from('UserAccount');
			$this->patient_db->where('UserAccount.user_id', $id);
			$this->patient_db->join('Patients','Patients.user_id=UserAccount.user_id');
			$query = $this->patient_db->get();
			$result = $query->row();
			$username = $result->username;
			$firstname = $result->firstname;
			$surname = $result->lastname;
			$email = $result->email;
			$age = $result->dob;
			$height = $result->height;
			$weight = $result->weight;
			$password = $result->password;
			$gender = $result->gender;
			$address = $result->address;
			$telephone = $result->telephone;
			$data = [
				"username" => $username,
				"firstname" => $firstname,
				"surname" => $surname,
				"email" => $email,
				"age" => $age,
				"height" => $height,
				"weight" => $weight,
				"password" => $password,
				"gender" => $gender,
				"address" => $address,
				"telephone" => $telephone
			];
		} else if ($status == "doctor"){
			$this->doctor_db = $this->load->database('doctor', TRUE);
			$this->doctor_db->select('UserAccount.*,Doctors.*,Specialities.*');
			$this->doctor_db->from('UserAccount');
			$this->doctor_db->where('UserAccount.user_id', $id);
			$this->doctor_db->join('Doctors','Doctors.user_id=UserAccount.user_id');
			$this->doctor_db->join('Specialities','Specialities.speciality_id=Doctors.speciality_id');
			$query = $this->doctor_db->get();
			$result = $query->row();
			$username = $result->username;
			$firstname = $result->firstname;
			$surname = $result->lastname;
			$email = $result->email;
			$age = $result->dob;
			$address = $result->address;
			$password = $result->password;
			$gender = $result->gender;
			$telephone = $result->telephone;
			$speciality = $result->name;
			$speciality_id=$result->speciality_id;
			$data = [
				"username" => $username,
				"firstname" => $firstname,
				"surname" => $surname,
				"email" => $email,
				"age" => $age,
				"address" => $address,
				"password" => $password,
				"gender" => $gender,
				"telephone" => $telephone,
				"speciality"=>$speciality,
				"speciality_id"=>$speciality_id
			];
		} else if ($status == "admin"){
			$this->admin_db = $this->load->database('admin', TRUE);
			$this->admin_db->select('UserAccount.*');
			$this->admin_db->from('UserAccount');
			$this->admin_db->where('user_id', $id);
			$query = $this->admin_db->get();
			$result = $query->row();
			$username = $result->username;
			$data = [
			"username" => $username
			];
		}
	    	return $data;
	}

	function getUsers($status)
	{
		//$query = $this->db->query("SELECT id, username FROM users");
		//return $query->result();
		if ($status == "patient") {
			$this->patient_db = $this->load->database('patient', TRUE);
			$this->patient_db->select('UserAccount.*,Patients.*');
			$this->patient_db->from('UserAccount');
			$this->patient_db->where('UserAccount.user_type', $status);
			$this->patient_db->join('Patients','Patients.user_id=UserAccount.user_id');
			$query = $this->patient_db->get();
			return $query->result();
		} else if ($status == "doctor"){
			$this->doctor_db = $this->load->database('doctor', TRUE);
			$this->doctor_db->select('UserAccount.*,Doctors.*,Specialities.*');
			$this->doctor_db->from('UserAccount');
			$this->doctor_db->where('UserAccount.user_type', $status);
			$this->doctor_db->join('Doctors','Doctors.user_id=UserAccount.user_id');
			$this->doctor_db->join('Specialities','Specialities.speciality_id=Doctors.speciality_id');
			$query = $this->doctor_db->get();
			return $query->result();
		} else if ($status == "admin"){
			$this->admin_db = $this->load->database('admin', TRUE);
			$this->admin_db->select('UserAccount.*');
			$this->admin_db->from('UserAccount');
			$this->admin_db->where('UserAccount.user_type', $status);
			$query = $this->admin_db->get();
			return $query->result();
		}
	}
	
	function delete_patients($patient_id)
	{
		$this->admin_db = $this->load->database('admin', TRUE);
		$this->admin_db->delete('UserAccount', array('user_id' => $patient_id));
		return $this->admin_db->affected_rows();	
	}

	function create_session($username,$status)
	{
		if ($status == "patient") {
			$this->patient_db = $this->load->database('patient', TRUE);
	    	$this->patient_db->select('*'); 
			$this->patient_db->from('UserAccount');
	    	$this->patient_db->where('username', $username);
	    	$query = $this->patient_db->get();
			$result = $query->row();
	    	$newdata = array(
	        'username'  => $username,
	        'logged_in' => TRUE,
			'id' => $result->user_id,
			'status' => $status,
			'grayscale' => "0",
			'grayscale-ie' => "0",
			'fontsize' => "1"
	        );
			return $newdata;
		} else if ($status == "doctor") {
			$this->doctor_db = $this->load->database('doctor', TRUE);
			$this->doctor_db->select('*'); 
			$this->doctor_db->from('UserAccount');
	    	$this->doctor_db->where('username', $username);
	    	$query = $this->doctor_db->get();
			$result = $query->row();
	    	$newdata = array(
	        'username'  => $username,
	        'logged_in' => TRUE,
			'id' => $result->user_id,
			'status' => $status
	        );
			return $newdata;
		} else if ($status == "admin") {
			$this->admin_db = $this->load->database('admin', TRUE);
			$this->admin_db->select('*'); 
			$this->admin_db->from('UserAccount');
	    	$this->admin_db->where('username', $username);
	    	$query = $this->admin_db->get();
			$result = $query->row();
	    	$newdata = array(
	        'username'  => $username,
	        'logged_in' => TRUE,
			'id' => $result->user_id,
			'status' => $status
	        );
			return $newdata;
		}
	}
	

	function filename_exists($username)
	{
		$this->user_db = $this->load->database('default', TRUE);
    	$this->user_db->select('*'); 
		$this->user_db->from('UserAccount');
    	$this->user_db->where('username', $username);
    	$query = $this->user_db->get();
		$result = $query->row();
    	return $query->num_rows();
	}

	function signing_in($username)
	{
		$this->user_db = $this->load->database('default', TRUE);
    	$this->user_db->select('*'); 
		$this->user_db->from('UserAccount');
    	$this->user_db->where('username', $username);
    	$query = $this->user_db->get();
    	if ($query->num_rows()>0){
	    	$this->user_db->select('*'); 
	    	$this->user_db->from('UserAccount');
	    	$this->user_db->where('username', $username);
	    	$query = $this->user_db->get();
			$result = $query->row();
			return $result->user_type;
	    	} else {
				return false;
		}
	}

	function password_hash($username)
	{
		$this->user_db = $this->load->database('default', TRUE);
		$this->user_db->select('password');
		$this->user_db->from('UserAccount');
		$this->user_db->where('username', $username);
		$query = $this->user_db->get();
		if ($query->num_rows()>0){
			$result = $query->row();
			return $result->password;
			} else {
				return false;
			}
	}
	
	public function specialities_model(){
		$this->db->select('*');
		$this->db->from('Specialities');
		$query = $this->db->get();
		return $query->result();
	}

	public function d_insert($status,$username,$data,$data2){
	   	if ($status == "patient"){
			$this->patient_db = $this->load->database('patient', TRUE);
		   	$this->patient_db->insert('UserAccount',$data);
		   	$this->patient_db->select('user_id');
		   	$this->patient_db->where('username', $username); 
		   	$this->patient_db->from('UserAccount');
		   	$query = $this->patient_db->get();
		   	$result = $query->row();
		   	$user_id = $result->user_id;
		   	$data3 = [
			   	"user_id"=>$user_id
			   	];
			$data4 = array_merge($data2,$data3);
		   	$this->patient_db->insert('Patients',$data4);
	   	} else if ($status == "doctor"){
			$this->doctor_db = $this->load->database('doctor', TRUE);
		   	$this->doctor_db->insert('UserAccount',$data);
		   	$this->doctor_db->select('user_id');
		   	$this->doctor_db->where('username', $username); 
		   	$this->doctor_db->from('UserAccount');
		   	$query = $this->doctor_db->get();
		   	$result = $query->row();
		   	$user_id = $result->user_id;
		   	$data3 = [
			   	"user_id"=>$user_id
			   	];
			$data4 = array_merge($data2,$data3);
		   	$this->doctor_db->insert('Doctors',$data4);
	   	} else if ($status == "admin"){
		   	$this->admin_db = $this->load->database('admin', TRUE);
		   	$this->admin_db->insert('UserAccount',$data);
	   	}
	}

	public function d_update($data,$data2,$id,$status){
		if ($status == "patient"){
			$this->patient_db = $this->load->database('patient', TRUE);
			$this->patient_db->where('user_id', $id);
			$this->patient_db->update('UserAccount', $data);
			$this->patient_db->where('user_id', $id);
			$this->patient_db->update('Patients', $data2);
		} else if ($status == "doctor"){
			$this->doctor_db = $this->load->database('doctor', TRUE);
			$this->doctor_db->where('user_id', $id);
			$this->doctor_db->update('UserAccount', $data);
			$this->doctor_db->where('user_id', $id);
			$this->doctor_db->update('Doctors', $data2);
		} else if ($status == "admin"){
			$this->admin_db = $this->load->database('admin', TRUE);
			$this->admin_db->where('user_id', $id);
			$this->admin_db->update('UserAccount', $data);
		}
	}

	public function count_id($username)
	{
	    $this->db->select('user_id');
	    $this->db->where('username', $username); 
	   	$this->db->from('UserAccount');
	    $query = $this->db->get();
	    $result = $query->row();
	    return $result->user_id;
	}
}
?>
