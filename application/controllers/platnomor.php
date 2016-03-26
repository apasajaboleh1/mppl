<?php

class platnomor extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}
	public function index()
	{
		$now = new DateTime ( NULL, new DateTimeZone('UTC'));
		$this->load->model('platnomer');
		$this->load->library('form_validation');
		//$nama = $this->input->post('nama');
		//$nrp = $this->input->post('nrp');
		$platnomor = $this->input->post('platnomor');
		//$alamat = $this->input->post('alamat');
		$res=$this->platnomer->plat($platnomor);
		if ($res)
		{
			foreach ($res as $row)
			{
				$data=array (
		'nama' => $row->nama, 'nrp'=>$row->nrp, 'alamat'=>$row->alamat, 'platnomor'=>$row->platnomor, 'jam'=> $now->format('Y-m-d H:i:s'));
			}
		}
		$this->load->model('motormasuk');
		$ins=$this->motormasuk->masuk($data);
		$del=$this->motormasuk->delete($platnomor);
		//$this->load->view('index',$tempp);
		redirect('home');
	}
}
	
?>