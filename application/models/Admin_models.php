<?php

	class Mahasiswa_model extends CI_model{

	public function getAllMahasiswa(){
	return $this->db->get('barang')->result_array();
	}

	public function tambahDataMahasiswa(){
	$data = [
		"nama" => $this->input->post('nama', true),
		"nrp" => $this->input->post('nrp', true),
		"email" => $this->input->post('email', true),
		"jurusan" => $this->input->post('jurusan', true),
		];
	$this->db->insert('barang', $data);
	}
}