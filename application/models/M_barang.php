<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        if(empty($this->session->userdata['auth_data'])){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akses ditolak, silahkan login terlebih dahulu!
            </div>');
            redirect('Auth');
        }
    }

    public function getLost(){
        $getdata = "SELECT * FROM barang_hilang";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }

     
    public function upload(){
        $id_user = $this->session->userdata['auth_data']['user_id'];
        
        // Input from users
        $nama_barang = $this->input->post('nama_barang');
        $id_kat = $this->input->post('id_kat');
        $id_prov = $this->input->post('id_prov');
        $deskripsi = $this->input->post('desc');
        $lokasi = $this->input->post('lokasi');
        $temp_titip = $this->input->post('place');
        $kota = $this->input->post('kota');

        $img_name = $_FILES['image']['name'];
        
        
        $add_data = "INSERT INTO barang_hilang(id_user, id_kategori, nama_barang, id_prov, des_barang, lokasi, temp_titip, kota, img_name) VALUES($id_user, $id_kat, '$nama_barang', $id_prov, '$deskripsi', '$lokasi', '$temp_titip', '$kota', '$img_name')";
        $this->db->query($add_data);

        // get id from uploaded data
        $query = "SELECT id_barang FROM barang_hilang WHERE img_name='$img_name'";
        $raw = $this->db->query($query);
        $id_arr = $raw->result_array();
        $id = $id_arr[0]['id_barang'];
        
        // New name
        $format = '.jpg';
        $newimgname = $id.$format;

        // Update nama gambar
        $update_img = "UPDATE barang_hilang SET img_name='$newimgname' WHERE id_barang=$id";
        $this->db->query($update_img);
        
        // Uplod file/image
        $this->load->helper('form');
        // Upload configuration
        $config['upload_path'] = './image/barang/hilang';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2048000';
        $config['file_name'] = $newimgname;
        // Adding config
        $this->load->library('upload', $config);
        // Uploading file
        $this->upload->do_upload('image');

        return;
    }
}