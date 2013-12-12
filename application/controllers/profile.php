<?php
session_start();

class profile extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['email'] = $session_data['email'];
			$data['name'] = $session_data['name'];
			$this->load->view('profile_view', $data);
		}
		else
		{
			redirect('login', 'refresh');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}
}

?>
