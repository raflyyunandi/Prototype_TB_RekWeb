<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ecommerce extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index(){
            $data['title'] = 'R.A.F Shop';
            $data['barang'] = $this->Admin_model->getAllBarang();
            $this->load->view('templates/ecommerce_header', $data);
            $this->load->view('ecommerce/index');
            $this->load->view('templates/ecommerce_footer');
    }

    public function buah(){
            $data['title'] = 'R.A.F Shop';
            // $aku = $this->db->query('SELECT * FROM `barang` WHERE jenis_barang = 2')->result_array();
            $this->db->select('*');
            $this->db->from('barang');
            $a = 2;
            $row = $this->db->where('jenis_barang' , $a);
            $data['buah'] = $this->db->get()->result_array();

            $this->load->view('templates/ecommerce_header', $data);
            $this->load->view('ecommerce/buah');
            $this->load->view('templates/ecommerce_footer');
    }

    public function sayuran(){
            $data['title'] = 'R.A.F Shop';
            
            $this->db->select('*');
            $this->db->from('barang');
            $a = 1;
            $row = $this->db->where('jenis_barang' , $a);
            $data['sayuran'] = $this->db->get()->result_array();

            $this->load->view('templates/ecommerce_header', $data);
            $this->load->view('ecommerce/sayuran');
            $this->load->view('templates/ecommerce_footer');
    }
}