<?php
class user extends CI_Model {
	public function userlogin($username,$password)
	{
		$this->db->select('nrp,password');
		$this->db->from('user');
		$this->db->where('nrp',$username);
		$this->db->where('password',$password);
		$query = $this->db->get();
		if ($query -> num_rows()==1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
}


?>