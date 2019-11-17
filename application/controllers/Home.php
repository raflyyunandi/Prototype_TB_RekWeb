<?php

	class Home extends CI_Controller{
		

	public function index()
	{
		
		$data['title'] = 'R.A.F Shop Index';
		$data['judul'] = 'Halaman Home';

		$this->load->model('Mahasiswa_model');
		$data['mhs'] = $this->Mahasiswa_model->getAllMahasiswa();
		$data['user'] = '.jpg';
		$this->load->view('templates/home_header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/home_footer');
	}

	public function pembayaran()
	{
		$this->load->view('templates/home_header');
		$this->load->view('home/pembayaran');
		$this->load->view('templates/home_footer');
	}

	public function keranjang()
	{
		$this->load->view('templates/home_header');
		$this->load->view('home/pembayaran');
		$this->load->view('templates/home_footer');
	}

	
}