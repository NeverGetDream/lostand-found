<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function getData($uid){
        $profile = $this->db->get_where('users', array('user_id' => $uid));
        $data = $profile->result_array();
        return $data[0];
    }
}