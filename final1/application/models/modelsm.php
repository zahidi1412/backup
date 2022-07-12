<?php 

class Modelsm extends CI_Model {
	function surat_masuk(){
		return $this->db->get('t_surat_masuk');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function surat_keluar(){
		return $this->db->get('t_surat_keluar');
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function edit_dat($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	function update_dat($where,$dat,$table){
		$this->db->where($where);
		$this->db->update($table,$dat);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>