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
    
    public function temukan(){
        $data['title'] = 'Temukan Barang | LostAndFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/temukan');
        $this->load->view('components/footer.php');
    }
    
    public function lost(){
        $data['title'] = 'Kehilangan Barang | LostAndFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/sub_temukan/lost');
        $this->load->view('components/footer.php');
    }

    public function found(){
        $data['title'] = 'Menemukan Barang | LostAndFound';
        $this->load->helper('url');
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/sub_temukan/found');
        // $this->load->view('components/footer.php');
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