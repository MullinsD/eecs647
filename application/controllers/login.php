<?php 

class login extends CI_Controller {

	function __contruct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('login_view');
	}
}

?>
