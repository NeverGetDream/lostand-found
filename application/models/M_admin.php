<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function getListUser(){
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function getUser($limit, $start){
        return $this->db->get('users', $limit, $start)->result_array();
    }

    public function countAllUsers(){
        $query = $this->db->get('users');
        return $query->num_rows();
    }

    public function countBarang(){
        $query = $this->db->get('barang_hilang');
        return $query->num_rows();
    }

    public function getBarang($limit, $start){
        $this->db->select('*');
        $this->db->from('barang_hilang');
        $this->db->join('kategori', 'barang_hilang.id_kategori = kategori.nomor', 'left');
        $this->db->join('prov', 'barang_hilang.id_prov = prov.nomor', 'left');
        $this->db->join('users', 'barang_hilang.id_user = users.user_id', 'left');
        
        $raw = $this->db->get();
        $data = $raw->result_array();
        return $data;


        // return $this->db->get('barang_hilang', $limit, $start)->result_array();
    }

    public function delBarang($id){
        $del = "DELETE FROM barang_hilang WHERE id_barang=$id";
        $this->db->query($del);
    }

    public function editAdmin(){
        $data['title'] = 'Edit Admin | LostAndFound';
        $data['image'] = $this->session->userdata['auth_data']['image'];
        $data['fname'] = $this->session->userdata['auth_data']['first_name'];
        $data['bname'] = $this->session->userdata['auth_data']['last_name'];
        $data['user'] = $this->session->userdata['auth_data'];

        $this->form_validation->set_rules('fname', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('bname', 'Nama Belakang', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('components/header', $data);
            $this->load->view('components/sidebar', $data);
            $this->load->view('components/topbar', $data);
            $this->load->view('admin/edit_admin', $data);
            $this->load->view('components/admin_footer', $data);
        } else {
            $name = [
                'first_name' => $this->input->post('fname'),

                'last_name' => $this->input->post('bname')
            ];

            $email = $this->input->post('email');

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

            $this->db->set($name);
            $this->db->where('email', $email);
            $this->db->update('users');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin/editAdmin');
        }
    }

    public function getInfo(){
        $sqladmin = 'SELECT user_id FROM users WHERE role_id=1';
        $sqluser = 'SELECT user_id FROM users WHERE role_id=2';
        $sqllost = 'SELECT id_barang FROM barang_hilang';
        $sqlfound = 'SELECT id_barang FROM barang_ditemukan';
        
        $rawadmin = $this->db->query($sqladmin);
        $rawuser = $this->db->query($sqluser);
        $rawlost = $this->db->query($sqllost);
        $rawfound = $this->db->query($sqlfound);

        $admin = $rawadmin->num_rows();
        $user = $rawuser->num_rows();
        $lost = $rawlost->num_rows();
        $found = $rawfound->num_rows();

        $data['admin'] = $admin;
        $data['user'] = $user;
        $data['lost'] = $lost;
        $data['found'] = $found;

        return $data;
    }

    public function pesan(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $comment = $this->input->post('comment');

        $add_data = "INSERT INTO pesan_hubungi(nama_pengguna,email_pengguna,pesan) VALUES('$nama','$email','$comment')";
        $this->db->query($add_data);
    }

    public function infoPesan() {
        $getdata = "SELECT * FROM pesan_hubungi";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data; 
    }

    public function countPesan(){
        $query = $this->db->get('pesan_hubungi');
        return $query->num_rows();
    }
}
