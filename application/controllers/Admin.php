<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        // Login Check
        if(empty($this->session->userdata['auth_data'])){
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Akses ditolak. Silahkan login terlebih dahulu!
                </div>'
            );
            redirect(base_url('auth'));
        }
        elseif($this->session->userdata['auth_data']['role_id'] == 2){
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Akses ditolak. Silahkan login sebagai Admin!
                </div>'
            );
            redirect(base_url('auth'));
        }
    }
    
    public function index(){
        $data['title'] = 'Admin Panel | LostAndFound';
        $this->load->view('components/header', $data);
        $this->load->view('components/sidebar');
        $this->load->view('components/topbar');
        $this->load->view('admin/index');
        $this->load->view('components/admin_footer');
    }

    public function listUser(){
        // Load Model
        $this->load->model('M_admin');
        // Get data
        $data['user'] = $this->M_admin->getListUser();
        $data['title'] = 'LIST USER';

        $this->load->view('components/header', $data);
        $this->load->view('components/sidebar');
        $this->load->view('components/topbar');
        $this->load->view('admin/list_user', $data);
        $this->load->view('components/admin_footer');

    }
}
