<?php

	class Admin_model extends CI_model{

	public function getAllBarang(){
	return $this->db->get('barang')->result_array();
	}

	public function insert($data){
    $this->db->insert('barang',$data);
    return TRUE;
  	}

  	public function getBarangById($id){
		return $this->db->get_where('barang', ['id'=> $id])->row_array();
	}

	
}