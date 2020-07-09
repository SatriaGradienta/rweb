<?php

class M_data extends CI_Model{
	public function data_pasien(){
		$query = $this->db->query("SELECT * FROM tb_pasien");
		return $query->result();
	}

	// public function data_mahasiswa(){
	// 	$query = $this->db->get('tb_mahasiswa');
	// 	return $query->result();
	// }

}

?>