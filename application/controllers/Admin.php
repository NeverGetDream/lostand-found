<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('components/header');
        $this->load->view('components/sidebar');
        $this->load->view('components/topbar');
        $this->load->view('admin/index');
        $this->load->view('components/admin_footer');
    }

    public function listUser()
    {
        // Load Model
        $this->load->model('M_admin');
        // Get data
        $data['user'] = $this->M_admin->getListUser();
        $data['title'] = 'LIST USER';

        $this->load->view('components/header');
        $this->load->view('components/sidebar');
        $this->load->view('components/topbar');
        $this->load->view('admin/list_user', $data);
        $this->load->view('components/admin_footer');

    }
}
