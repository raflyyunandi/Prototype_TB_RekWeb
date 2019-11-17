<?php

	class Home extends CI_Controller{
	public function index($nama = 'Rafly Yunandi A')
	{
		$data['title'] = 'R.A.F Shop Index';
		$data['judul'] = 'Halaman Home';
		$data['nama'] = $nama;
		$this->load->view('templates/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}