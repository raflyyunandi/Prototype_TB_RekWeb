<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
    {
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    public function index()
    {
        $role_id = $this->session->userdata('role_id');
        if ($role_id == 1) {
            redirect('auth/blocked');
        } elseif (empty($role_id)) {
            redirect('auth/blocked');
        }
        
        $data['barang'] = $this->Admin_model->getAllBarang();
        $data['order'] = $this->Admin_model->getAllOrder();
        $data['title'] = "Index Shop";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->session->userdata('role_id');
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
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

        $this->load->view('templates/topbar', $data);
        $this->load->view('user/buah');
        $this->load->view('templates/ecommerce_footer');
    }

    public function sayuran(){
        $data['title'] = 'R.A.F Shop';
        
        $this->db->select('*');
        $this->db->from('barang');
        $a = 1;
        $row = $this->db->where('jenis_barang' , $a);
        $data['sayuran'] = $this->db->get()->result_array();

        $this->load->view('templates/topbar', $data);
        $this->load->view('user/sayuran');
        $this->load->view('templates/ecommerce_footer');
    }

    public function detail($id)
    {
        $data['barang'] = $this->Admin_model->getAllBarang();
        $data['title'] = "Detail Barang";
        $data['data'] = $this->Admin_model->getBarangById($id);
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function profile()
    {
        $data['title'] = "My Profile";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function cart()
    {
        // $waw= $this->db->get_where('user', ['id_user'=>
        // $this->session->userdata('id_user')])->row_array();
        // $id = $waw; 

        $this->db->select('id_user', 'saldo');
        $this->db->from('order_user');
        $data['get'] = $this->db->get()->row_array(); 


        $id_user =  $this->input->post('id_user');
        $this->db->select('*');
        $this->db->from('order_user a'); 
        $this->db->join('barang b', 'b.id_barang=a.id_barang');
        $this->db->join('user c', 'c.id_user=a.id_user');
        $this->db->where('c.id_user',$id_user);
        $data['bacot'] = $this->db->get()->result_array();

        
        if(!$id_user =  $this->input->post('id_user')){
        $data['title'] = "My Cart";
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/cartkosong', $data);
        $this->load->view('templates/ecommerce_footer');
        } else {
        $data['title'] = "My Cart";
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/cart', $data);
        $this->load->view('templates/ecommerce_footer');
        }


    }
    public function cartadd()
    {
        $id_barang   = $this->input->post('id_barang');
        $id_user   = $this->input->post('id_user');
        $beli   = $this->input->post('beli');

        $this->db->select('id_user');
        $this->db->from('user');
        $row = $this->db->where('id_user', $id_user);
        $data = array(
              'id_barang'  => $id_barang,
              'id_user'  => $id_user,
              'beli'  => $beli,
          );
        
        $this->Admin_model->setOrder($data);
        redirect('user/cart');
    }


    public function deletecart($id)
    {
      $this->Admin_model->hapusDataOrder($id);
      $this->session->set_flashdata('flash', 'Dihapus');
      redirect('user/cart');
    }


     public function ganti()
     {
        $data['title'] = "My ganti";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/ganti', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    public function topup()
    {
        $data['title'] = "My ganti";
        $data['data'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/topup', $data);
        $this->load->view('templates/ecommerce_footer');

    }

    public function ubahpass()
    {
        $data['title'] = "My ganti";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/ubahpass', $data);
        $this->load->view('templates/ecommerce_footer');
    }

    // public function updatecart()
    // {
    //     $id_barang   = $this->input->post('id_barang');
    //     $id_user   = $this->input->post('id_user');
    //     $beli   = $this->input->post('beli');
    //     $id   = $this->input->post('id');

    //     $data = array(
    //           'id_barang'  => $id_barang,
    //           'id_user'  => $id_user,
    //           'id'  => $id,
    //           'beli'  => $beli,
    //       );
            
    //     $this->db->set($data);
    //     $this->db->where('id', $id);
    //     $this->db->update('order_user');

    //     redirect('user/cart');
    // }

    public function isisaldo()
    {
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

    public function checkout(){
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();

        $id_user   = $this->input->post('id_user');
        $saldo   = $this->input->post('saldo');
        $total   = $this->input->post('total');

        $this->db->select('saldo');
        $this->db->from('user');
        $this->db->where('id_user' ,$id_user);

        $bisa = $saldo - $total;

        if ($bisa > 0 ){
        $data['title'] = "checkout";
        $this->load->view('templates/checkout_header', $data);
        $this->load->view('user/checkout', $data);
        $this->load->view('templates/ecommerce_footer');
        

        $data = array(
          'id_user'  => $id_user,
          'saldo'  => $bisa,
        );
        $this->db->set($data);
        $this->db->where('id_user', $id_user);
        $this->db->update('user');
        } else {
              $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Saldo Tidak Cukup/Item belum ditampilkan</div>');
            redirect('user/cart');
        }
          
    }

    // public function checkout() 
    // {
    //     $stock_barang = $this->input->post('stock_barang');
    //     $id_barang = $this->input->post('id_barang');
    //     $saldo = $this->input->post('saldo');
    //     $harga_barang = $this->input->post('harga_barang');
    //     $beli = $this->input->post('beli');
    //     $id_user = $this->input->post('id_user');

    //     $b = $harga_barang * $beli;
    //     $c = $saldo - $b;
    //     $d = $stock_barang - $beli;
    //     if($c > 0) {
    //         $data = array(
    //         'saldo'  => $c,
    //         );
    //         $this->db->set($data);
    //         $this->db->where('id_user', $id_user);
    //         $this->db->update('user');
    //     }  if ($d > 0) {
    //        $data = array(
    //       'stock_barang'  => $d,
    //       'id_barang'  => $id_barang,
    //     );
    //     $this->db->set($data);
    //     $this->db->where('id_barang', $id_barang);
    //     $this->db->update('barang');
    //     } else {
    //         echo "error";
    //     }

    //     redirect('user/print');
    // }

    public function print(){
        $data['title'] = "PRINT";
        $data['user'] = $this->db->get_where('user', ['email'=>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/checkout_header', $data);
        $this->load->view('user/print', $data);

        $cara_pengiriman = $this->input->post('cara_pengiriman');
        $kurir = $this->input->post('kurir');
        $no_hp = $this->input->post('no_hp');
        $kota_tujuan = $this->input->post('kota_tujuan');
        $alamat_lengkap = $this->input->post('alamat_lengkap');
        $email_user = $this->input->post('email_user');

        $data = array(
          'cara_pengiriman'  => $cara_pengiriman,
          'kurir'  => $kurir,
          'no_hp'  => $no_hp,
          'kota_tujuan'  => $kota_tujuan,
          'alamat_lengkap'  => $alamat_lengkap,
          'email_user' => $email_user,
        );

        $this->db->insert('transaksi',$data);
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) 
        {
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

          if ($upload_image)
          {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) 
                {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                    } else {
                    echo $this->upload->display_errors();
                } 
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }

     public function changePassword() 
     {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) 
        {
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/ubahpass', $data);
            $this->load->view('templates/ecommerce_footer');
            } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) 
                {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                    redirect('user/ubahpass');
                } else {
                    if ($current_password == $new_password) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                        redirect('user/ubahpass');
                    } else {
                        // password sudah ok
                        $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                        $this->db->set('password', $password_hash);
                        $this->db->where('email', $this->session->userdata('email'));
                        $this->db->update('user');

                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                        redirect('user/ubahpass');
                    }
                }
        }
    }

}