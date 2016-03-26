<?php

class motorkeluar extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}
	public function index()
	{
		$now = new DateTime ( NULL, new DateTimeZone('UTC'));
		$this->load->model('platnomer');
		$this->load->model('motorkeluarquery');
		$this->load->library('form_validation');
		//$nama = $this->input->post('nama');
		//$nrp = $this->input->post('nrp');
		$platnomor = $this->input->post('platkeluar');
		//$alamat = $this->input->post('alamat');
		$res=$this->platnomer->plat($platnomor);
		$stat=$this->motorkeluarquery->id($platnomor);
		foreach ($stat as $row1)
		{
			$stat1=$row1->jam;
		}
		if ($res)
		{
			foreach ($res as $row)
			{
				$data=array (
		'nama' => $row->nama, 'nrp'=>$row->nrp, 'alamat'=>$row->alamat, 'platnomor'=>$row->platnomor, 'jam'=> $now->format('Y-m-d H:i:s'), 'jammasuk'=>$stat1);
			}
		}
		$ins=$this->motorkeluarquery->keluar($data);
		$del=$this->motorkeluarquery->delete($platnomor);
		redirect('home');
	}
}
	
?>