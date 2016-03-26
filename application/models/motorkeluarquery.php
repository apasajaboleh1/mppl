<?php
class motorkeluarquery extends CI_Model {
	public function keluar($data)
	{
		$this->db->insert('cobakeluar',$data);
		//$query = $this->db->get();
		//return $query->result();
	}
	public function delete($platnomor)
	{
		$this->db->where ('platnomor',$platnomor);
		$this->db->delete('coba');
	}
	public function id($platnomor)
	{
		$this->db->select ('jam');
		$this->db->from ('coba');
		$this->db->where ('platnomor',$platnomor);
		$q = $this->db->get();
		
		return $q->result();
	}
}


?>