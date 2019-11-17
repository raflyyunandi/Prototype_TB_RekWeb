
<?php 
class Mahasiswa_model extends CI_Model
{
	public function getAllMahasiswa()
	{
		return $this->db->get('barang')->result_array();
	}

	public function cariDataMahasiswa(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama',$keyword);
		$this->db->or_like('nrp',$keyword);
		$this->db->or_like('jurusan',$keyword);
		$this->db->or_like('email',$keyword);
		return $this->db->get('barang')->result_array();
	}
}