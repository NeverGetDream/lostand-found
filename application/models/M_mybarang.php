<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mybarang extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akses ditolak, silahkan login terlebih dahulu!
            </div>');
            redirect('Auth');
        }
    }

    public function getMybarang($id){
        $getdata = "SELECT * FROM barang_hilang LEFT JOIN kategori ON kategori.id_kategori = barang_hilang.id_kategori LEFT JOIN users ON barang_hilang.id_user = users.user_id LEFT JOIN prov ON barang_hilang.id_prov=prov.nomor WHERE barang_hilang.id_barang='$id'";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }
}