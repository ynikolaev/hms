<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function mypage()
	{
		$student = [
		"name" => "Yan Nikolaev",
		"email" => "yanikolaev@uclan.ac.uk",
		"course" => "Computing",
		];
		$this->load->view('mypage', $student);
	}

	public function displayrows()
	{
		$this->load->model('mymodel');
		$data['records'] = $this->mymodel->getData();
		$this->load->view('displayrows',$data);
	}

	public function insert()
	{
		$this->load->helper('form');
		$this->load->view('insertrow');
	}

	function insertrow(){ 
	$this->load->model('mymodel');    
    	$data = [
        "name" => $this->input->post('name'),
        "age" => $this->input->post('age')
    	];
	$this->mymodel->insert($data);
	echo "<p>Row inserted</p><a href=\"/CodeIgniter/index.php/Welcome/insert\"> Back</a>"; 
	}

	public function search()
	{
		$this->load->helper('form');
		$this->load->view('search');
	}

	function searchrow(){ 
	$this->load->model('mymodel');    
    	$name = $this->input->post('name');
	$this->mymodel->select($name);
	$data['records'] = $this->mymodel->select($name);
		if (in_array("error", $data)) {
		echo "<p>Row doesn't exist</p><a href=\"/CodeIgniter/index.php/Welcome/search\"> Back</a>"; 
		} else {
		$this->load->view('searchresult',$data);
			}
		}
}
?>
