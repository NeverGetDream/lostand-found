<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Main extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        // Buat koeneksi
        $this->load->database();
    }

    public function getprov(){
        $get = "SELECT nomor, provinsi FROM prov";
        $dataraw = $this->db->query($get);
        $data = $dataraw->result_array();
        return $data;
    }

    public function getkategori(){
        $get = "SELECT nomor, kategori FROM kategori";
        $rawdata = $this->db->query($get);
        $data = $rawdata->result_array();
        return $data;
    }
    
    public function getThreads($limit, $start){
        $this->db->select('thread_id, id_user, text, first_name, image');
        $this->db->limit($limit, $start);
        $this->db->from('threads');
        $this->db->join('users', 'threads.id_user = users.user_id', 'left');
        $data = $this->db->get()->result_array();
        return $data;
    }

    public function getThreadsRow(){
        $query = $this->db->get('threads');
        return $query->num_rows();
    }

    public function inComment($th_id, $uid, $comment){
        $aa = "INSERT INTO comment(id_thread, id_user, comment) VALUES($th_id, $uid, '$comment')";
        $this->db->query($aa);
        return;
    }

    public function getComment(){
        $sek = "SELECT id_thread, id_user, comment, first_name, users.image FROM comment LEFT JOIN users ON comment.id_user = users.user_id";
        $raw = $this->db->query($sek);
        $data = $raw->result_array();
        // echo '<pre>'; print_r($data); echo '</pre>'; die();
        return $data;
    }

    public function insertThreads($uid, $text){
        $dd = "INSERT INTO threads(id_user, text) VALUES($uid, '$text')";
        $this->db->query($dd);
        return;
    }

}