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

	public function getUserById($id_user){
		return $this->db->get_where('user', ['id'=> $id_user])->row_array();
	}

    public function hapusDataBarang($id)
    {
      $this->db->where('id',$id);
      $this->db->delete('barang');
    }

    public function cariDataBarang()
		{
			$keyword = $this->input->post('keyword',true);
			$this->db->like('nama_barang', $keyword);
			$this->db->or_like('jenis_barang',$keyword);
			$this->db->or_like('harga_barang',$keyword);
			$this->db->or_like('stock_barang',$keyword);
			$this->db->or_like('image',$keyword);
			$this->db->or_like('deskripsi_barang',$keyword);
			return $this->db->get('barang')->result_array();
		}
	
}