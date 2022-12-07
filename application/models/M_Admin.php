<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {
    public function getUser(){
        $query = "SELECT user_id, username, password, email, first_name, last_name, tgl_lahir, alamat, kota, provinsi FROM users";
        $data_user = $this->db->query($query);
    }
}