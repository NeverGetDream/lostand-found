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

    public function getGreeting(){
        date_default_timezone_set("Asia/Makassar");

        $b = time();
        $hour = date("G", $b);

        if ($hour >= 0 && $hour <= 11) {
            $gret = 'pagi';
        }
        elseif ($hour >= 12 && $hour <= 14) {
            $gret = 'siang';
        }
        elseif ($hour >= 15 && $hour <= 17) {
            $gret = 'sore';
        }
        elseif ($hour >= 17 && $hour <= 18) {
            $gret = 'petang';
        }
        elseif ($hour >= 19 && $hour <= 23) {
            $gret = 'malam';
        }
        else{
            $gret = 'datang';
        }

        return $gret;
    }
}