<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nrp'] = $session_data['nrp'];
			$this->load->model('selectmotormasuk');
			$this->load->model('tabelnrp');
			$temp['listnrp']=$this->selectmotormasuk->user();
			$tempp['grafik']=$this->tabelnrp->userin();
			$a['listkeluar']=$this->selectmotormasuk->user2();
			$a2['aaaa']=$this->tabelnrp->inap();
			$a3['graf']=$this->tabelnrp->grafik1();
			$this->load->view('header',$data);
			$this->load->view('v_grafik',$tempp);
			$this->load->view('index',$temp);
			$this->load->view('inap',$a2);
			$this->load->view('keluar',$a);
			$this->load->view('grafik_1',$a3);
			$this->load->view('motor',$data);
		}
		else
		{
			$this->load->model('selectmotormasuk');
			$this->load->model('tabelnrp');
			$temp['listnrp']=$this->selectmotormasuk->user();
			$a['listkeluar']=$this->selectmotormasuk->user2();
			$tempp['grafik']=$this->tabelnrp->userin();
			$a2['aaaa']=$this->tabelnrp->inap();
			$this->load->view('header');
			$this->load->view('v_grafik',$tempp);
			$this->load->view('index',$temp);
			$this->load->view('inap',$a2);
			$this->load->view('keluar',$a);
			$this->load->view('motor');
		}
		
	}
	public function statistik()
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nrp'] = $session_data['nrp'];
			$this->load->model('tabelnrp');
			$this->load->model('selectmotormasuk');
			$tempp['grafik']=$this->tabelnrp->userin();
			$temp3['grafik1']=$this->tabelnrp->grafik1();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header',$data);
			$this->load->view('v_grafik',$tempp);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
			$this->load->view('statistikmotor');
			
		}
		else
		{
			$this->load->model('tabelnrp');
			$this->load->model('selectmotormasuk');
			$tempp['grafik']=$this->tabelnrp->userin();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header');
			$this->load->view('v_grafik',$tempp);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
			$this->load->view('statistikmotor');
		}
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function question()
	{
		$this->load->view('question');
	}
	public function tabelnrp()
	{
		$this->load->model('tabelnrp');
		$temp['listnrp']=$this->tabelnrp->user();
		$this->load->view('tabelnrp',$temp);
	}
	public function login()
	{
		$this->load->helper('url');
		$this->load->model('user');
		$this->load->library('form_validation');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$result=$this->user->userlogin($username,$password);
		
		if ($result)
		{
			$sessionarr=array();
			foreach ($result as $row)
			{
				$sessionarr=array(
					'nrp' => $row->nrp
				);
				$this->session->set_userdata($sessionarr);
			}
			redirect('/home');
		}
		else
		{
			$this->form_validation->set_message('Invalid username or password');
			$this->load->view('loginform');
		}
	}
	public function loginform()
	{
		$this->load->helper(array('form','url'));
		$this->load->view('header');
		$this->load->view('loginform');
	}
	public function motormasuk()
	{
		$this->load->helper(array('form','url'));
		$session_data = $this->session->userdata('logged_in');
		$data['nrp'] = $session_data['nrp'];
		$this->load->model('tabelnrp');
		$temp1['listout']=$this->tabelnrp->user2();
		$this->load->view('header',$data);
		$this->load->view('statistikout',$temp1);
		$this->load->view('motormasuk');
	}
	public function motorkeluar()
	{
		$this->load->helper(array('form','url'));
		$session_data = $this->session->userdata('logged_in');
		$data['nrp'] = $session_data['nrp'];
		$this->load->model('tabelnrp');
		$temp1['listin']=$this->tabelnrp->user();
		$this->load->view('header',$data);
		$this->load->view('statistik',$temp1);
		$this->load->view('motorkeluar');
	}
	public function insertbiodata()
	{
		$this->load->helper(array('form','url'));
		if ($this->session->userdata('logged_in'))
		{
		$session_data = $this->session->userdata('logged_in');
		$data['nrp'] = $session_data['nrp'];
		$this->load->view('header',$data);
		$this->load->view('biodata');	
		}	
	}
	public function logout()
	{
		$this->load->view('logout');
	}
	public function chart()
	{
		$this->load->view('v_grafik');
	}
	public function inap()
	{
		$this->load->view('inap');
	}
	public function statistikmasuk()
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nrp'] = $session_data['nrp'];
			$this->load->model('tabelnrp');
			$this->load->model('selectmotormasuk');
			$temp3['grafik1']=$this->tabelnrp->grafik1();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header',$data);
			$this->load->view('v_grafik1',$temp3);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
			
		}
		else
		{
			$this->load->model('tabelnrp');
			$this->load->model('selectmotormasuk');
			$tempp['grafik1']=$this->tabelnrp->grafik1();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header');
			$this->load->view('v_grafik1',$tempp);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
		}
	}
	public function statistikkeluar()
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nrp'] = $session_data['nrp'];
			$this->load->model('tabelnrp');
			$this->load->model('selectmotormasuk');
			$temp3['grafik1']=$this->tabelnrp->grafik2();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header',$data);
			$this->load->view('v_grafik2',$temp3);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
			
		}
		else
		{
			$this->load->model('tabelnrp');
			$this->load->model('selectmotormasuk');
			$tempp['grafik1']=$this->tabelnrp->grafik2();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header');
			$this->load->view('v_grafik2',$tempp);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
		}
	}
	public function statistikrange()
	{
		if ($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['nrp'] = $session_data['nrp'];
			$this->load->model('tabelnrp');
			$this->load->model('statistik');
			$this->load->model('selectmotormasuk');
			$temp3['graf']=$this->statistik->stat3();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header',$data);
			$this->load->view('v_grafika',$temp3);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
			
		}
		else
		{
			$this->load->model('tabelnrp');
			$this->load->model('statistik');
			$this->load->model('selectmotormasuk');
			$temp3['graf']=$this->statistik->stat3();
			$b['select1']=$this->selectmotormasuk->user();
			$c['select2']=$this->selectmotormasuk->user2();
			$temp1['listin']=$this->tabelnrp->user();
			$a1['listout']=$this->tabelnrp->user2();
			$this->load->view('header');
			$this->load->view('v_grafika',$temp3);
			$this->load->view('selectstatin',$b);
			$this->load->view('statistik',$temp1);
			$this->load->view('selectstatout',$c);
			$this->load->view('statistikout',$a1);
		}
	}
}
