<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller{

    public function __construct() {
        parent::__construct();
        is_logged();
        $this->load->model('Admin_model');

    }
    
    public function index(){
        $data['barang'] = $this->Admin_model->getAllBarang();
        $data['order'] = $this->Admin_model->getAllOrder();
        $data['title'] = "Index Shop";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function detail($id){
        $data['barang'] = $this->Admin_model->getAllBarang();
        $data['title'] = "Detail Barang";
        $data['data'] = $this->Admin_model->getBarangById($id);
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function profile(){
        $data['title'] = "My Profile";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function cart(){
        $id = "30";
        $this->db->select('*');
        $this->db->from('order_user a'); 
        $this->db->join('barang b', 'b.id_barang=a.id_barang');
        $this->db->join('user c', 'c.id_user=a.id_user');
        $this->db->where('c.id_user',$id);
        $data['b'] = $this->db->get()->result_array(); 
        
        $data['title'] = "My Cart";
        // $data['user'] = $this->db->get_where('user', ['email'=>
        // $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/cart', $data);
        $this->load->view('templates/ecommerce_footer');

    }

    public function cartadd(){
        $id_barang   = $this->input->post('id_barang');
        $id_user   = $this->input->post('id_user');
        $beli   = $this->input->post('beli');

        $data = array(
              'id_barang'  => $id_barang,
              'id_user'  => $id_user,
              'beli'  => $beli,
          );
        
        $this->Admin_model->setOrder($data);
        redirect('user/cart');
    }

     public function ganti(){
        $data['title'] = "My ganti";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/ganti', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function topup(){
        $data['title'] = "My ganti";
        $data['data'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        return $this->load->view('user/topup', $data);
        $this->load->view('templates/ecommerce_footer');

    }

    public function ubahpass(){
        $data['title'] = "My ganti";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/ubahpass', $data);
        $this->load->view('templates/ecommerce_footer');
    }

   public function updatecart()
    {
        $id_barang   = $this->input->post('id_barang');
        $id_user   = $this->input->post('id_user');
        $beli   = $this->input->post('beli');
        $id   = $this->input->post('id');

        $data = array(
              'id_barang'  => $id_barang,
              'id_user'  => $id_user,
              'id'  => $id,
              'beli'  => $beli,
          );
        
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('order_user');
        
        redirect('user/cart');
    }

    public function isisaldo() {
        $saldo   = $this->input->post('saldo');
        $tambahanS   = $this->input->post('tambahanS');
        $id_user   = $this->input->post('id_user');
        
        $saldo = $tambahanS + $saldo;

        $data = array(
          'id_user'  => $id_user,
          'saldo'  => $saldo,
        );
        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');

        redirect('user/profile');
    }

    public function edit(){
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

          if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                } 
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }

     public function changePassword() {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/ecommerce_footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

}