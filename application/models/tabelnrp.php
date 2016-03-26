<?php
class tabelnrp extends CI_Model {
	public function user()
	{
		$this->db->select('nama,nrp,alamat,platnomor,jam');
		$this->db->from('coba');
		
		$query = $this->db->get();
		return $query->result();
	}
	public function user2()
	{
		$this->db->select('nama,nrp,alamat,platnomor,jam');
		$this->db->from('cobakeluar');
		
		$query = $this->db->get();
		return $query->result();
	}
	public function userin()
	{
		//$this->db->select('COUNT(distinct r.platnomor) as total, COUNT(distinct k.platnomor) as totalkeluar');
		
		//$this->db->from('coba r,cobakeluar k');
		$query = $this->db->query("
SELECT DISTINCT (SELECT COUNT(*) AS total FROM coba)AS total,(SELECT COUNT(*) AS totalkeluar FROM cobakeluar)AS totalkeluar FROM coba");
		//$query = $this->db->get();
		return $query->result();
	}
	public function userout()
	{
		$this->db->select('COUNT(platnomor) as total');
		$this->db->from('cobakeluar');
		
		$query = $this->db->get();
		return $query->result();
	}
	public function inap()
	{
		$now = new DateTime ( NULL, new DateTimeZone('UTC'));
		$date = date("Y-m-d");
		$qq = $this->db->query("SELECT * FROM coba WHERE jam < '$date'");
		return $qq->num_rows();
	}
	public function grafik1()
	{
		$now = new DateTime ( NULL, new DateTimeZone('UTC'));
		$date = date("Y-m-d");
		$qq = $this->db->query("SELECT DISTINCT ( 
		SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 0)AS jam0, 
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 1)AS jam1,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 2)AS jam2,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 3)AS jam3,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 4)AS jam4,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 5)AS jam5,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 6)AS jam6,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 7)AS jam7,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 8)AS jam8,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 9)AS jam9,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 10)AS jam10,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 11)AS jam11,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 12)AS jam12,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 13)AS jam13,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 14)AS jam14,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 15)AS jam15,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 16)AS jam16,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 17)AS jam17,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 18)AS jam18,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 19)AS jam19,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 20)AS jam20,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 21)AS jam21,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 22)AS jam22,
		(SELECT COUNT(*) AS total FROM coba WHERE EXTRACT(HOUR FROM jam) = 23)AS jam23
		FROM coba");
		return $qq->result();
	}
	public function grafik2()
	{
		$now = new DateTime ( NULL, new DateTimeZone('UTC'));
		$date = date("Y-m-d");
		$qq = $this->db->query("SELECT DISTINCT ( 
		SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 0)AS jam0, 
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 1)AS jam1,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 2)AS jam2,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 3)AS jam3,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 4)AS jam4,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 5)AS jam5,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 6)AS jam6,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 7)AS jam7,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 8)AS jam8,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 9)AS jam9,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 10)AS jam10,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 11)AS jam11,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 12)AS jam12,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 13)AS jam13,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 14)AS jam14,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 15)AS jam15,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 16)AS jam16,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 17)AS jam17,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 18)AS jam18,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 19)AS jam19,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 20)AS jam20,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 21)AS jam21,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 22)AS jam22,
		(SELECT COUNT(*) AS total FROM cobakeluar WHERE EXTRACT(HOUR FROM jam) = 23)AS jam23
		FROM cobakeluar");
		return $qq->result();
	}
}



?>