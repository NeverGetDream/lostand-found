<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Profile extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_profile');

        // Login Check
        if (empty($this->session->userdata['auth_data'])) {
            // Belum login
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Mohon maaf. Silahkan login terlebih dahulu!
                </div>'
            );
            redirect(base_url('auth'));
        } elseif ($this->session->userdata['auth_data']['role_id'] == 1) {
            // User adalah admin
            redirect(base_url('admin/profileAdmin'));
        }
    }

    public function index(){
        // User data
        $uid = $this->session->userdata['auth_data']['user_id'];
        $prfdata = $this->M_profile->getData($uid);
        $data['data_profil'] = $prfdata;
        
        // Get Greeting
        $data['greeting'] = $this->M_profile->getGreeting();
        $data['info_barang'] = $this->M_profile->getInfoBarang();
        
        $data['title'] = 'Profile | LostAndFound';
        $data['status'] = 'profile';
        
        // View
        $this->load->view('profileuser/head', $data);
        $this->load->view('profileuser/nb', $data);
        $this->load->view('profileuser/data', $data);
        // $this->load->view('components/footer');
        
    }
    
    public function editProfile(){
        $uid = $this->session->userdata['auth_data']['user_id'];
        $prfdata = $this->M_profile->getData($uid);
        $data['data_profil'] = $prfdata;
        
        $prov_raw = $this->db->get('prov');
        $p = $prov_raw->result_array();
        $data['prov'] = $p;
        
        $data['title'] = 'Edit Profile | LostAndFound';
        $data['status'] = 'edit';
        $data['sourcecontrol'] = 'db';

        // View
        $this->load->view('profileuser/head', $data);
        $this->load->view('profileuser/nb', $data);
        $this->load->view('profileuser/edit', $data);
        // echo '<pre>'; print_r($data); echo '</pre>'; die();
    }

    public function doEdit(){
        $this->form_validation->set_rules('fname', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('bname', 'Nama belakang', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('no_hp', 'No. Handphone', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        if ($this->form_validation->run() == false) {
            // redirect('profile/');
            $prov_raw = $this->db->get('prov');
            $p = $prov_raw->result_array();
            $data['prov'] = $p;
            
            $data['title'] = 'Edit Profile | LostAndFound';
            $data['status'] = 'edit';
            $data['sourcecontrol'] = 'form_validation';
    
            // View
            $this->load->view('profileuser/head', $data);
            $this->load->view('profileuser/nb', $data);
            $this->load->view('profileuser/edit', $data);
        }
        else{
            $data = $_FILES['new_img']['name'];
            if(!empty($data)){
                $uid = $this->session->userdata['auth_data']['user_id'];
                $this->M_profile->updateDataWithImage($uid);
                $this->M_profile->updateSession($uid);
                redirect('profile');
            }
            else{
                $uid = $this->session->userdata['auth_data']['user_id'];
                $this->M_profile->updateDataOnly($uid);
                $this->M_profile->updateSession($uid);
                redirect('profile');
            }
        }
    }

    public function security(){
        $uid = $this->session->userdata['auth_data']['user_id'];

        $data['title'] = 'Keamanan | LostAndFound';
        $data['status'] = 'security';


        $this->load->view('profileuser/head', $data);
        $this->load->view('profileuser/nb', $data);
        $this->load->view('profileuser/security');
    }

    public function passChange(){
        $uid = $this->session->userdata['auth_data']['user_id'];

        $this->form_validation->set_rules('old_pass', 'old_pass', 'trim|required', ['required' => 'Password lama tidak boleh kosong']);
        $this->form_validation->set_rules('new_pass_confir', 'new_pass_confir', 'trim|required|min_length[5]', ['required' => 'Password baru tidak boleh kosong', 'min_length' => 'Password terlalu pendek']);

        $status = $this->form_validation->run();
        if ($status ==  false) {
            $data['title'] = 'Keamanan | LostAndFound';
            $data['status'] = 'security';
    
    
            $this->load->view('profileuser/head', $data);
            $this->load->view('profileuser/nb', $data);
            $this->load->view('profileuser/security');
        } else {
            $this->_passChange($uid);
        }
    }
    
    private function _passChange($uid){
        echo 'ubah';
        $old_pass = $this->input->post('old_pass');
        $new_pass = $this->input->post('new_pass_confir');

        $password = $this->M_profile->getPass($uid);

        if (password_verify($old_pass, $password)) {
            $password = password_hash($new_pass, PASSWORD_DEFAULT);
            $update = "UPDATE users SET password='$password' WHERE user_id='$uid'";
            $this->db->query($update);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Password berhasil diubah!
            </div>');

            redirect('profile/security');
        }
        else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Maaf, Password lama tidak sesuai!
            </div>');
            redirect('profile/security');
        }
    }
}