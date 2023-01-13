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
        $data['userdata'] = $prfdata;

        // Get Greeting
        $data['greeting'] = $this->M_profile->getGreeting();
        $data['info_barang'] = $this->M_profile->getInfoBarang();

        $data['title'] = 'Profile | Lost LostAndFound';
        $data['status'] = 'profile';

        // View
        $this->load->view('profileuser/head', $data);
        $this->load->view('profileuser/nb', $data);
        $this->load->view('profileuser/data', $data);
        // $this->load->view('components/footer');

    }
}