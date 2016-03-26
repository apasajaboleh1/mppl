<?php
class motormasuk extends CI_Model {
	public function masuk($data)
	{
		$this->db->insert('coba',$data);
		//$query = $this->db->get();
		//return $query->result();
	}
		public function delete($platnomor)
	{
		$this->db->where ('platnomor',$platnomor);
		$this->db->delete('cobakeluar');
	}
	
}



?>