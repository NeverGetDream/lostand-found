<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Admin Page | LostandFound';
        $this->load->helper('url');
        $this->load->view('components/navbar_adm.php',$data);
		$this->load->view('admin/home_adm.php');
        $this->load->view('components/footer.php');
	}

    public function user_list(){
        $this->load->helper('url');
        $data['title'] = 'List User | LostandFound';
        $this->load->view('components/navbar_adm.php',$data);
		$this->load->view('admin/user_list.php');
        $this->load->view('components/footer.php');
    }
}
?>