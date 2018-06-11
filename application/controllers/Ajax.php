<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Hms_main.php");
class Ajax extends Hms_main {

    public function __construct()
    {
        parent::__construct();
	$this->load->model('mymodel');
	$this->load->library('../controllers/Hms_main');
    }

    public function index()
    {
      
    }
    
    public function set_grayscale(){
	    $status =  $this->input->post("gray_status");
    	if ($status == 'grayscale(100%)') {
		    $this->session->set_userdata('grayscale','0');
		    $this->session->set_userdata('grayscale-ie','0');
		    $jsonReply['reply'] = false; 
		    header('Content-Type:application/json;');
			echo json_encode($jsonReply);
	    } else {
		    $this->session->set_userdata('grayscale','grayscale(100%)');
		    $this->session->set_userdata('grayscale-ie','gray');
		    $jsonReply['reply'] = true; 
		    header('Content-Type:application/json;');
			echo json_encode($jsonReply);
	    }
    }
    
    public function bill_info() {
	    self::check_session();
		$bill =  $this->input->post("bill_id");
	    $query = $this->mymodel->get_bills($bill);
		$jsonReply = array();
		if ($query > 0 ) {
	    	$jsonReply['bill_availability'] = $query;
	    	header('Content-Type:application/json;');
			echo json_encode($jsonReply);
			return $query;
	    } else {
		    $jsonReply['bill_availability'] = false;
	    	header('Content-Type:application/json;');
	    	echo json_encode($jsonReply);
	    }
    }

    public function delete_patients()
    {			
	self::check_session();
	self::if_admin();
	$patient_id =  $this->input->post('user_id');		
		
	$query = $this->mymodel->delete_patients($patient_id);
		
	$jsonReply['reply'] = false;
		
	if ($this->db->affected_rows() > 0)
        {
	    $jsonReply['reply'] = true;
	}

	echo json_encode($jsonReply);

    }

    public function user_availability()
    {	
	$username = $this->input->post('username');
    $query = $this->mymodel->filename_exists($username);
	$jsonReply = array();
	if ($username == "" || $username == " ") {
		$jsonReply['content'] = false;
		header('Content-Type:application/json;');
		echo json_encode($jsonReply);
	} else if (!preg_match('/^[a-z0-9 ]+$/i',$username) || strpos($username, ' ') > 0) {
		$jsonReply['whitespace'] = false;
		header('Content-Type:application/json;');
		echo json_encode($jsonReply);
	} else if (strlen($username) < 4 ) {
		$jsonReply['size'] = false;
		header('Content-Type:application/json;');
		echo json_encode($jsonReply);
	} else if ($query > 0 ) {
		$jsonReply['availability'] = false;
		header('Content-Type:application/json;');
		echo json_encode($jsonReply);
	} else {
		$jsonReply['availability'] = true;
		header('Content-Type:application/json;');
		echo json_encode($jsonReply);
	}
    	
    }

   public function checkfield()
    {
        $field = $this->input->post('form');
	if (strlen($field) == 0) {
     	   	return false;
   	 } else {
    	    	return true;
   	 }
    }
}
?>
