<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('M_admin');

        // Login Check
        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Akses ditolak. Silahkan login terlebih dahulu!
                </div>'
            );
            redirect(base_url('auth'));
        } elseif ($this->session->userdata['auth_data']['role_id'] == 2) {
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
        // ambil data
        $uid = $this->session->userdata['auth_data']['user_id'];
        $data['infodata'] = $this->M_admin->getInfo($uid);

        $data['image'] = $this->session->userdata['auth_data']['image'];
        $data['fname'] = $this->session->userdata['auth_data']['first_name'];
        $data['bname'] = $this->session->userdata['auth_data']['last_name'];
        $data['title'] = 'Admin Panel | LostAndFound';

        $this->load->view('components/header', $data);
        $this->load->view('components/sidebar');
        $this->load->view('components/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('components/admin_footer', $data);
    }

    public function listUser()
    {
        $this->load->model('M_admin');
        $this->load->library('pagination');
        $config['base_url'] = 'http://localhost/lostandfound/admin/listUser';
        $config['total_rows'] = $this->M_admin->countAllUsers();
        $config['per_page'] = 7;

        //style
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item ">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link" >';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item ">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');




        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['list'] = $this->M_admin->getUser($config['per_page'], $data['start']);
        $data['title'] = 'List user | LostAndFound';
        $data['image'] = $this->session->userdata['auth_data']['image'];
        $data['fname'] = $this->session->userdata['auth_data']['first_name'];
        $data['bname'] = $this->session->userdata['auth_data']['last_name'];
        $data['user'] = $this->session->userdata['auth_data'];
        $this->load->view('components/header', $data);
        $this->load->view('components/sidebar', $data);
        $this->load->view('components/topbar', $data);
        $this->load->view('admin/list_user', $data);
        $this->load->view('components/admin_footer', $data);
    }
    public function profileAdmin()
    {
        $data['title'] = 'Profile Admin | LostAndFound';
        $data['image'] = $this->session->userdata['auth_data']['image'];
        $data['fname'] = $this->session->userdata['auth_data']['first_name'];
        $data['bname'] = $this->session->userdata['auth_data']['last_name'];
        $data['user'] = $this->session->userdata['auth_data'];
        $this->load->view('components/header', $data);
        $this->load->view('components/sidebar', $data);
        $this->load->view('components/topbar', $data);
        $this->load->view('admin/profile_admin', $data);
        $this->load->view('components/admin_footer', $data);
    }

    public function editAdmin()
    {

        $this->load->model('M_admin');
        $this->M_admin->editAdmin();
    }
}
