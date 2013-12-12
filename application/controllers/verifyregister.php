<?php

class VerifyRegister extends CI_Controller {

	function __construct()
 	{
  		parent::__construct();
   		$this->load->model('user','',TRUE);
 	}

	function index()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('affiliation', 'Affiliation', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|');

	
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('register_view');
		}
		else
		{
			$name        = $this->input->post('name');
			$email       = $this->input->post('email');
			$password    = $this->input->post('password');
			$affiliation = $this->input->post('affiliation');

			$input_data = array(
			'name' => $name,
			'email' => $email,
			'password' => $password,
			'affiliations' => $affiliation
			);

			$this->db->insert('Pacebook_User', $input_data);
			redirect('login', 'refresh');
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
