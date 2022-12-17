<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        // Buat koeneksi
        $this->load->database();
    }
    
    public function TambagBarangHilang(){
        $user_id = $this->session->userdata['auth_data']['user_id'];
        
        // Input from users
        $nama_barang = $this->input->post('nama_barang');
        $lokasi = $this->input->post('lokasi');
        $kategori = $this->input->post('kategori');
        $desc = $this->input->post('desc');
        $tempat_titip = $this->input->post('place');
        $prov = $this->input->post('provinsi');
        $kota = $this->input->post('kota');
        $img_name = $_FILES['image']['name'];
        
        
        $add_data = "INSERT INTO barang_hilang(id_user, nama_barang, kategori, des_barang, lokasi, temp_titip, kota, provinsi, img_name) VALUES($user_id, '$nama_barang', '$kategori', '$desc', '$lokasi', '$tempat_titip', '$kota', '$prov', '$img_name')";
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
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048000';
        $config['file_name'] = $newimgname;
        // Adding config
        $this->load->library('upload', $config);
        // Uploading file
        $this->upload->do_upload('image');
    }

    public function getLost(){
        $getdata = "SELECT * FROM barang_hilang";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }

    public function getprov(){
        $get = "SELECT provinsi FROM prov";
        $dataraw = $this->db->query($get);
        $data = $dataraw->result_array();
        return $data;
    }

    public function getkategori(){
        $get = "SELECT kategori FROM kategori";
        $rawdata = $this->db->query($get);
        $data = $rawdata->result_array();
        return $data;
    }

    public function getlostdetail($id_barang){

    }
}