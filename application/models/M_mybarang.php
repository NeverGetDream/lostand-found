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


}