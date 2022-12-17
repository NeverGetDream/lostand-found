<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

	public function index(){
        $data['title'] = 'Home | LostandFound';
        $data['status'] = 'home';
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/home');
        $this->load->view('components/footer.php');
	}

    public function hubungi(){
        $data['title'] = 'Hubungi | LostandFound';
        $data['status'] = 'hubungi';
        $this->load->view('components/navbar.php', $data);
		$this->load->view('main/hubungi');
        $this->load->view('components/footer.php');
	}
    
    public function barang(){
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
        $data['status'] = 'barang';
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
        $this->load->model('M_Main');
        $databarang = $this->M_Main->getlost();
        $data['title'] = 'Kehilangan Barang | LostAndFound';
        $data['status'] = 'barang';
        $data['barang'] = $databarang;

        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/sub_temukan/lost', $data);
        $this->load->view('components/footer.php');
    }
    
    public function lost_($id){
        // echo $id; die();
    }

    public function found(){
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
        $this->load->model('M_Main');
        $prov = $this->M_Main->getprov();
        $kategori = $this->M_Main->getkategori();
        $data['prov'] = $prov;
        $data['kat'] = $kategori;
        $data['title'] = 'Menemukan Barang | LostAndFound';
        $data['status'] = 'barang';
        $this->load->view('components/navbar.php',$data);
        $this->load->view('main/sub_temukan/found', $data);
        // $this->load->view('components/footer.php');
    }

    public function help(){
        $data['status'] = 'bantuan';
        $data['title'] = 'Bantuan | LostandFound';
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/help');
        $this->load->view('components/footer.php');
	}

    public function tentang(){
        $data['status'] = 'tentang';
        $data['title'] = 'Tentang | LostandFound';
        $this->load->view('components/navbar.php',$data);
		$this->load->view('main/tentang');
        $this->load->view('components/footer.php');
	}

    public function FoundInput(){
        $this->load->model('M_Main');
        $this->M_Main->TambagBarangHilang();
        redirect('main/barang');
    }
}
?>