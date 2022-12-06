<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Home | LostandFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/home');
        $this->load->view('components/footer.php');
	}

    public function hubungi()
	{
        $data['title'] = 'Hubungi | LostandFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/hubungi');
        $this->load->view('components/footer.php');
	}

    public function help()
	{
        $data['title'] = 'Bantuan | LostandFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/help');
        $this->load->view('components/footer.php');
	}

    public function tentang()
	{
        $data['title'] = 'Tentang | LostandFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/tentang');
        $this->load->view('components/footer.php');
	}
}
?>