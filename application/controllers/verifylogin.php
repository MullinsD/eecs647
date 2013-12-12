<?php

class VerifyLogin extends CI_Controller {

	function __construct()
 	{
  		parent::__construct();
   		$this->load->model('user','',TRUE);
 	}

	function index()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

	
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('login_view');
		}
		else
		{
			redirect('profile', 'refresh');
		}
	}

	function check_database($password)
	{

		$email = $this->input->post('email');

		$result = $this->user->login($email, $password);

		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'email' => $row->email,
					'name' => $row->name
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid login credentials');
			return FALSE;
		}
	}
}
?>
