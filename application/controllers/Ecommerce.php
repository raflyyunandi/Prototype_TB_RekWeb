<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ecommerce extends CI_Controller{

    public function __construct(){
        parent::__construct();
       
    }

    public function index(){
            $data['title'] = 'R.A.F Shop';
            $this->load->view('templates/ecommerce_header', $data);
            $this->load->view('ecommerce/index');
            $this->load->view('templates/ecommerce_footer');
    }
}