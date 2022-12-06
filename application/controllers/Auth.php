<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login | LostaAndFound';
        $this->load->view('components/auth_header', $data);
        $this->load->view('auth/login');
    }

    public function register()
    {
        $this->form_validation->set_rules('fname','Fname','required|trim')
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Register | LostaAndFound';
            $this->load->view('components/auth_header', $data);
            $this->load->view('auth/register');
        }
    }
}
