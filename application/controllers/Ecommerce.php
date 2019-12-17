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
            $data['barang'] = $this->Admin_model->getAllBarang();
            $this->load->view('templates/ecommerce_header', $data);
            $this->load->view('ecommerce/buah');
            $this->load->view('templates/ecommerce_footer');
    }

    public function sayuran(){
            $data['title'] = 'R.A.F Shop';
            $data['barang'] = $this->Admin_model->getAllBarang();
            $this->load->view('templates/ecommerce_header', $data);
            $this->load->view('ecommerce/sayuran');
            $this->load->view('templates/ecommerce_footer');
    }
}