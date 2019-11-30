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


}