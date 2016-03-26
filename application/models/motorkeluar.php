<?php
class motorkeluarquery extends CI_Model {
	public function keluar($data)
	{
		$this->db->insert('keluar',$data);
		//$query = $this->db->get();
		//return $query->result();
	}
}


?>