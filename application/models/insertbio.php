<?php
class insertbio extends CI_Model{
	public function bio ($bionrp,$bionama,$bioalamat,$bioplat)
	{
		$insbio = array (
		'nrp'=>$bionrp,  'platnomor'=>$bioplat, 'nama'=>$bionama, 'alamat'=>$bioalamat
		);
		$this->db->insert('biodata',$insbio);
	}
}
?>