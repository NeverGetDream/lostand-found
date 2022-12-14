<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index()
	{
        $data['title'] = 'Home | LostandFound';
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/home');
        $this->load->view('components/footer.php');
	}

    public function hubungi()
	{
        $data['title'] = 'Hubungi | LostandFound';
        $this->load->view('components/navbar.php', $data);
		$this->load->view('main/hubungi');
        $this->load->view('components/footer.php');
	}
    
    public function temukan(){
        if(empty($this->session->userdata['auth_data'])){
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Silahkan login terlebih dahulu!
                </div>'
            );
            redirect('auth');
            return;
        }
        $data['title'] = 'Temukan Barang | LostAndFound';
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/temukan');
        $this->load->view('components/footer.php');
    }
    
    public function lost(){
        if(empty($this->session->userdata['auth_data'])){
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                Silahkan login terlebih dahulu!
                </div>'
            );
            redirect('auth');
            return;
        }
        $data['title'] = 'Kehilangan Barang | LostAndFound';
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/sub_temukan/lost');
        $this->load->view('components/footer.php');
    }

    public function found(){
        $data['title'] = 'Menemukan Barang | LostAndFound';
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/sub_temukan/found');
        // $this->load->view('components/footer.php');
    }

    public function help()
	{
        $data['title'] = 'Bantuan | LostandFound';
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/help');
        $this->load->view('components/footer.php');
	}

    public function tentang(){
        $data['title'] = 'Tentang | LostandFound';
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/tentang');
        $this->load->view('components/footer.php');
	}

    public function FoundInput(){
        $this->load->model('M_Main');
        $this->M_Main->TambagBarangHilang();
        redirect('main/temukan');
    }
}
?>