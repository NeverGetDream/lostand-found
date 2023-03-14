<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $data['title'] = 'Home | LostandFound';
        $data['status'] = 'home';
        $this->load->view('components/navbar.php', $data);
        $this->load->view('main/home');
        $this->load->view('components/footer.php');
    }

    public function hubungi()
    {
        $data['title'] = 'Hubungi | LostandFound';
        $data['status'] = 'hubungi';
        $this->load->view('components/navbar.php', $data);
        $this->load->view('main/hubungi');
        $this->load->view('components/footer.php');
    }

    public function barang()
    {
        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                    Silahkan login terlebih dahulu!
                </div>'
            );
            redirect('auth');
            return;
        }
        // Get data searching
        $search = $this->input->get('searchkey');

        // Load
        $this->load->model('M_barang');
        $this->load->model('M_Main');

        if (!empty($search)) {
            $barang = $this->M_barang->getLostSearch($search);
        } else {
            $barang = $this->M_barang->getlost();
        }

        $kat = $this->M_Main->getkategori();        

        $data['barang'] = $barang;
        $data['kat'] = $kat;
        $data['title'] = 'Temukan Barang | LostAndFound';
        $data['status'] = 'barang';

        $this->load->view('components/navbar', $data);

        if(empty($barang)){
            $data['back'] = 'main/barang';
            $this->load->view('emptydata', $data);
        }
        else{
            $this->load->view('main/temukan', $data);
            $this->load->view('components/footer.php');
        }
    }
    
    public function threads(){
        $this->load->model('M_Main');
        $this->load->library('pagination');

        $config['base_url'] = base_url('main/threads');
        $config['total_rows'] = $this->M_Main->getThreadsRow();
        $config['per_page'] = 20;

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
        $data['threads'] = $this->M_Main->getThreads($config['per_page'], $data['start']);
        
        $data['status'] = 'threads';
        $data['title'] = 'Threads | LostAndFound';

        $comment = $this->M_Main->getComment();
        $data['comment'] = $comment;

        $this->load->view('components/navbar', $data);
        $this->load->view('main/barang/threads', $data);
    }

    public function thread_post(){
        $this->load->model('M_Main');
        $this->load->library('form_validation');

        $uid = $this->session->userdata['auth_data']['user_id'];

        $this->form_validation->set_rules('message', 'message', 'trim|required|min_length[8]', ['required' => 'Informasi tidak boleh kosong', 'min_length' => 'Informasi terlalu singkat!']);

        if($this->form_validation->run() == false){
            // $this->load->model('M_Main');
            $this->load->library('pagination');

            $config['base_url'] = base_url('main/threads');
            $config['total_rows'] = $this->M_Main->getThreadsRow();
            $config['per_page'] = 20;

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
            $data['threads'] = $this->M_Main->getThreads($config['per_page'], $data['start']);
            
            $data['status'] = 'threads';
            $data['title'] = 'Threads | LostAndFound';

            $comment = $this->M_Main->getComment();
            $data['comment'] = $comment;


            $this->load->view('components/navbar', $data);
            $this->load->view('main/barang/threads', $data);
        }
        else{
            $text = $this->input->post('message');
            $this->M_Main->insertThreads($uid, $text);
            redirect('main/threads');
        }
    }

    public function comment(){
        $this->load->model('M_Main');

        $thread = $this->input->post('thread_id');
        $uid = $this->session->userdata['auth_data']['user_id'];
        $comment = $this->input->post('comment');

        $this->M_Main->inComment($thread, $uid, $comment);
        redirect('main/threads');
    }

    public function barang_kat($no_kategori)
    {
        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                    Silahkan login terlebih dahulu!
                </div>'
            );
            redirect('auth');
            return;
        }
        // Get data
        $this->load->model('M_barang');
        $this->load->model('M_Main');
        $barang = $this->M_barang->getlostByKat($no_kategori);
        $filter = $this->M_barang->getFilter($no_kategori);
        $kat = $this->M_Main->getkategori();

        $data['k_barang'] = $barang;
        $data['filter'] = $filter;
        $data['kat'] = $kat;
        $data['title'] = 'Temukan Barang | LostAndFound';
        $data['status'] = 'barang';

        $this->load->view('components/navbar', $data);
        $this->load->view('main/barang/kat_temukan', $data);
        
    }



    public function found(){
        if (empty($this->session->userdata['auth_data'])) {
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
        $data['title'] = 'Upload Barang | LostAndFound';
        $data['status'] = 'barang';

        $this->load->view('components/navbar.php', $data);
        $this->load->view('main/barang/upbarang.php', $data);
    }

    public function foundinput(){
        $this->load->model('M_barang');
        $this->M_barang->upload();
        redirect('Main/barang');
    }

    public function help()
    {
        $data['status'] = 'bantuan';
        $data['title'] = 'Bantuan | LostandFound';
        $this->load->view('components/navbar.php', $data);
        $this->load->view('main/help');
        $this->load->view('components/footer.php');
    }

    public function tentang(){
        $data['status'] = 'tentang';
        $data['title'] = 'Tentang | LostandFound';
        $this->load->view('components/navbar.php', $data);
        $this->load->view('main/tentang');
        $this->load->view('main/hubungi');
        $this->load->view('components/footer.php');
    }
}
