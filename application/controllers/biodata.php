<?php
class biodata extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
	}
	public function index()
	{
		$this->load->model ('insertbio');
		$this->load->library ('form_validation');
		$bionrp=$this->input->post('nrp');
		$bionama=$this->input->post('nama');
		$bioalamat=$this->input->post('alamat');
		$bioplat=$this->input->post('plat');
		$ins=$this->insertbio->bio($bionrp,$bionama,$bioalamat,$bioplat);
		redirect ('home');
	}
}
?>