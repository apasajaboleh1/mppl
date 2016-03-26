<?php
 
class c_grafik extends CI_Controller {
 /**
  * @author : Mahesa p Kannygara
  **/
 function __construct()
 {
  parent::__construct(); 
  $this->load->model('tabelnrp');
  $this->load->model('statistik');
  $this->load->database();
  $this->load->helper('url');
 }
  
 public function index()
 {
	$temp['grafik']=$this->statistik->stat1();
	$tempp['graf']=$this->statistik->stat3();
	//$this->load->view('stats',$tempp);
	$this->load->view('v_grafika',$tempp);
 }
}