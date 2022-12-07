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
        $this->form_validation->set_rules('fname', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('bname', 'Nama belakang', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register | LostaAndFound';
            $this->load->view('components/auth_header', $data);
            $this->load->view('auth/register');
        } else {
            $data = [
                'first_name' => $this->input->post('fname'),
                'last_name' => $this->input->post('bname'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),

            ];
        }
    }
}
