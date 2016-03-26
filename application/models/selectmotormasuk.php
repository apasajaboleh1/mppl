<?php
class selectmotormasuk extends CI_Model {
	public function user()
	{
		$this->db->select('nama,nrp,alamat,platnomor,jam');
		$this->db->from('coba');
		
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function user2()
	{
		$this->db->select('nama,nrp,alamat,platnomor,jam');
		$this->db->from('cobakeluar');
		
		$query = $this->db->get();
		return $query->num_rows();
	}
}

?>