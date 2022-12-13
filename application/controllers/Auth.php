<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() ==  false) {
            $data['title'] = 'Login | LostaAndFound';
            $this->load->view('components/auth_header', $data);
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $this->session->set_userdata('auth_data', $user);
                    // View raw data
                    // $data = $this->session->userdata['auth_data'];
                    // $row = $user -> fetch_assoc();
                    // echo '<pre>'; print_r($data); echo '</pre>'; die();

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('main');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Salah!
                    </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email belum di aktivasi!
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email belum pernah terdaftar!
            </div>');
            redirect('auth');
        }
    }

    public function register(){
        $this->form_validation->set_rules('fname', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('bname', 'Nama belakang', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', ['is_unique' => 'Email already registered']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', ['min_length' => 'Password terlalu pendek']);
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register | LostaAndFound';
            $this->load->view('components/auth_header', $data);
            $this->load->view('auth/register');
        } else {
            $data = [
                'first_name' => htmlspecialchars($this->input->post('fname', true)),
                'last_name' => htmlspecialchars($this->input->post('bname', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
                'kota' => htmlspecialchars($this->input->post('kota', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'image' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! akun anda berhasil dibuat. Silahkan Login!
            </div>');
            if(empty($this->session->userdata['auth_data'])){
                redirect('auth');
            }
            elseif(!empty($this->session->userdata['auth_data'])){
                $this->session->unset_userdata('auth_data');
                redirect('auth');
            }
        };
    }

    public function logout(){
        // $this->session->unset_userdata('email');
        // $this->session->unset_userdata('role_id');
        
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Anda telah Logout!
            </div>'
        );
        $this->session->unset_userdata('auth_data');
        // $this->session->sess_destroy();
        redirect('auth');
    }
}