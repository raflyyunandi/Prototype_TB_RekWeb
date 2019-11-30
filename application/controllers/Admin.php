<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        is_logged();
    }

    public function index() {
        $data['title'] = "Dashboard";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function tambah(){
        $data['title'] = 'Form Tambah Data Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/tambah', $data);
            $this->load->view('templates/ecommerce_footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('user');
        }   
    } 
}