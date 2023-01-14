<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function info($barang_id){
        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                    Silahkan login terlebih dahulu!
                </div>'
            );
            redirect('auth');
            return;
        }
        $this->load->model('M_mybarang');
        $barang = $this->M_mybarang->getMybarang($barang_id);
        $data['barang'] = $barang;
        $data['title'] = 'List user | LostAndFound';
        $data['status'] = 'barang';
        $this->load->view('components/navbar', $data);
        $this->load->view('main/barang/my_barang', $data);
        
        
    }
}