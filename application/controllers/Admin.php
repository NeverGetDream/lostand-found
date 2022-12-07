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
        $this->load->view('components/header');
        $this->load->view('components/sidebar');
        $this->load->view('components/topbar');
        $this->load->view('admin/list_user');
        $this->load->view('components/admin_footer');
    }
}
