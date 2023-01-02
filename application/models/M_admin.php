<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function getListUser()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function getUser($limit, $start)
    {
        return $this->db->get('users', $limit, $start)->result_array();
    }

    public function countAllUsers()
    {
        $query = $this->db->get('users');
        return $query->num_rows();
    }

    public function editAdmin()
    {
        $data['title'] = 'Edit Admin | LostAndFound';
        $data['image'] = $this->session->userdata['auth_data']['image'];
        $data['fname'] = $this->session->userdata['auth_data']['first_name'];
        $data['bname'] = $this->session->userdata['auth_data']['last_name'];
        $data['user'] = $this->session->userdata['auth_data'];

        $this->form_validation->set_rules('fname', 'Nama Depan', 'required|trim');
        $this->form_validation->set_rules('bname', 'Nama Belakang', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('components/header', $data);
            $this->load->view('components/sidebar', $data);
            $this->load->view('components/topbar', $data);
            $this->load->view('admin/edit_admin', $data);
            $this->load->view('components/admin_footer', $data);
        } else {
            $name = [
                'first_name' => $this->input->post('fname'),

                'last_name' => $this->input->post('bname')
            ];

            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set($name);
            $this->db->where('email', $email);
            $this->db->update('users');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('admin/editAdmin');
        }
    }
}
