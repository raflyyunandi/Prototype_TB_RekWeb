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

     public function shop()
    {
        $data['barang'] = $this->Admin_model->getAllBarang();
        $data['order'] = $this->Admin_model->getAllOrder();
        $data['title'] = "Index Shop";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->session->userdata('role_id');
        $this->load->view('templates/ecommerce_header', $data);
        $this->load->view('ecommerce/shop', $data);
        $this->load->view('templates/ecommerce_footer');
    }
   
}