<?php 

class Modelsm extends CI_Model {
	function anggota($number,$offset){
		return $query = $this->db->get('anggota',$number,$offset)->result();
	}
	function jumlah_data(){
		return $this->db->get('anggota')->num_rows();
	}

	function pengurus($number,$offset){
		return $query = $this->db->get('pengurus',$number,$offset)->result();
	}
	function jumlah_pengu(){
		return $this->db->get('pengurus')->num_rows();
	}

	function pembina($number,$offset){
		return $query = $this->db->get('pembina',$number,$offset)->result();
	}
	function jumlah_pemb(){
		return $this->db->get('pembina')->num_rows();
	}

	function proker($number,$offset){
		return $query = $this->db->get('proker',$number,$offset)->result();
	}
	function jumlah_pro(){
		return $this->db->get('proker')->num_rows();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
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