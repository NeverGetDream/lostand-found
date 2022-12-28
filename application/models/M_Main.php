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

}