<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once (dirname(__FILE__) . "/Hms_main.php");
class Splash extends Hms_main {

function __construct() {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
	$this->load->library('session');
	$this->load->library('form_validation');
	$this->load->helper('array');
	$this->load->helper('security');
    }
	
public function splash_reg()
	{
		$this->load->view('d_splash_reg');
	}
	
public function splash_log()
{
	self::check_session();
	$this->load->view('d_splash_log');
}
}
?>