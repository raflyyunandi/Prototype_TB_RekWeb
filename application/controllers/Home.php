<?php

	class Home extends CI_Controller{
		

	public function index()
	{
		
		$data['title'] = 'R.A.F Shop Index';
		$this->load->model('Mahasiswa_model');
		$data['mhs'] = $this->Mahasiswa_model->getAllMahasiswa();
		if ($this->input->post('keyword')) {
		$data['mhs'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}
		$data['user'] = '.jpg';
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/home_footer');
	}

	public function pembayaran()
	{
		$data['title'] = 'Halaman Pembayaran';
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/pembayaran', $data);
		$this->load->view('templates/home_footer');
	}

	public function keranjang()
	{
		$data['title'] = 'Halaman Keranjang';
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/keranjang', $data);
		$this->load->view('templates/home_footer');
	}

	
}