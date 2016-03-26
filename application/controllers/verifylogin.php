<?php
class verifylogin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->helper(array('form'));
	}
	public function index()
	{	$this->load->helper('url','security');
		$this->load->model('user');
		$this->load->library('form_validation');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result=$this->user->userlogin($username,$password);
		
		if ($result)
		{
			foreach ($result as $row)
			{
				$sessionarr=array(
					'nrp' => $row->nrp
				);
				$this->session->set_userdata('logged_in',$sessionarr);
			}
			redirect('home');
		}
		else
		{
			$this->form_validation->set_message('check_database','Invalid username or password');
			$this->load->view('header');
			$this->load->view('loginform');
		}
	}
	}
?>