<?php
class platnomer extends CI_Model {
	public function plat($platnomor)
	{
		$now = new DateTime ( NULL, new DateTimeZone('UTC'));
		$this->db->select('nama,nrp,alamat,platnomor');
		$this->db->from('biodata');
		$this->db->where('platnomor',$platnomor);
		$qq = $this->db->get();
		return $qq->result();
		//$query = $this->db->get();
		//return $query->result();
	}
	
}



?>