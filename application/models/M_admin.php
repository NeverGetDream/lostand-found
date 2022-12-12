<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        // Buat koeneksi
        $this->load->database();
    }

    public function getListUser(){
        $alluser = "SELECT user_id, first_name, last_name, email, alamat, kota, provinsi, is_active, role_id FROM users";
        $dataraw = $this->db->query($alluser);
        $data = $dataraw->result_array();
        return $data;
    }
}