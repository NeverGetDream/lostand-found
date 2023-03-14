<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('M_barang');

        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                    Akses ditolak. Silahkan login terlebih dahulu!
                </div>'
            );
            redirect('auth');
        }
    }

    public function info($barang_id){
        $barang = $this->M_barang->getMybarang($barang_id);
        $data['barang'] = $barang;
        $data['title'] = 'Verifikasi Barang | LostAndFound';
        $data['status'] = 'barang';
        $this->load->view('components/navbar', $data);
        $this->load->view('main/barang/my_barang', $data);
    }

    public function edit($id_barang){
        $uid = $this->session->userdata['auth_data']['user_id'];

        $this->load->model('M_Main');

        $prov = $this->M_Main->getprov();
        $kategori = $this->M_Main->getkategori();

        $databarang = $this->M_barang->getInfoEdit($uid, $id_barang);
        
        $data['databarang'] = $databarang;
        $data['source'] = 'db';

        $data['prov'] = $prov;
        $data['kat'] = $kategori;
        $data['title'] = 'Edit Info Barang | LostAndFound';
        $data['status'] = 'barang';

        // $this->load->view('components/navbar.php', $data);
        $this->load->view('main/barang/editdata', $data);
    }

    public function delete($id){
        $this->M_barang->deleteData($id);
        redirect('profile/uploaded/0');
    }

    public function saveEdit(){
        $uid = $this->session->userdata['auth_data']['user_id'];

        $this->load->library('form_validation');

        $this->form_validation->set_rules('id_barang', 'id_barang', 'required|trim');
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required|trim', ['required' => 'Nama barang tidak boleh kosong']);
        $this->form_validation->set_rules('lokasi', 'lokasi', 'required|trim', ['required' => 'Lokasi tidak boleh kosong']);
        $this->form_validation->set_rules('desc', 'desc', 'required|trim|min_length[15]', ['required' => 'Lokasi tidak boleh kosong', 'min_length' => 'Setidaknya berikan beberapa deskripsi']);
        $this->form_validation->set_rules('place', 'place', 'required|trim', ['required' => 'Tempat dititipkan tidak boleh kosong']);
        $this->form_validation->set_rules('kota', 'kota', 'required|trim', ['required' => 'Tempat dititipkan tidak boleh kosong']);

        $this->form_validation->set_rules('id_kat', 'id_kat', 'required');
        $this->form_validation->set_rules('id_prov', 'id_prov', 'required');

        if($this->form_validation->run() == false){
            $this->load->model('M_Main');
    
            $prov = $this->M_Main->getprov();
            $kategori = $this->M_Main->getkategori();
    
            $id_barang = $this->input->post('id_barang');
            $databarang = $this->M_barang->getInfoEdit($uid, $id_barang);
            $data['img'] = $databarang['img_name'];
            $data['source'] = 'form_validation';
    
            $data['prov'] = $prov;
            $data['kat'] = $kategori;
            $data['title'] = 'Edit Info Barang | LostAndFound';
            $data['status'] = 'barang';
    
            // $this->load->view('components/navbar.php', $data);
            $this->load->view('main/barang/editdata', $data);
        }
        else{
            $id_barang = $this->input->post('id_barang');
            $this->M_barang->saveUpdateData($uid, $id_barang);
            redirect('profile/uploaded/0');
        }

    }


    public function verifRequest(){
        $uid = $this->session->userdata['auth_data']['user_id'];
        $id_barang = $this->input->post('id_barang');

        $dataReq = $this->M_barang->getVerifData($id_barang);

        $data['data'] = $dataReq;
        $data['title'] = 'Konfirmasi | LostAndFound';

        $user = $this->M_barang->getUser($id_barang);
        $data['first_name'] = $user['first_name'];
        $data['last_name'] = $user['last_name'];
        $data['no_hp'] = $user['no_hp'];
        $data['prov'] = $user['provinsi'];
        $data['kota'] = $user['kota'];
        $data['alamat'] = $user['alamat'];
        $data['image'] = $user['image'];

        $this->load->view('main/barang/askVerifikasi', $data);
    }

    public function upVerifFile(){
        $id_barang = $this->input->post('id_barang');
        $uid = $this->session->userdata['auth_data']['user_id'];

        $img1 = '';
        $img2 = '';
        $img3 = '';
        $img4 = '';
        $img5 = '';

        if(!empty($_FILES['imgA'])){
            $img1 = $this->M_barang->doImgVerifUpload('imgA');
        }
        if(!empty($_FILES['imgB'])){
            $img2 = $this->M_barang->doImgVerifUpload('imgB');
        }
        if(!empty($_FILES['imgC'])){
            $img3 = $this->M_barang->doImgVerifUpload('imgC');
        }
        if(!empty($_FILES['imgD'])){
            $img4 = $this->M_barang->doImgVerifUpload('imgD');
        }
        if(!empty($_FILES['imgE'])){
            $img5 = $this->M_barang->doImgVerifUpload('imgE');
        }

        $asd = "INSERT INTO verif_request(id_barang, id_user, img_A, img_B, img_C, img_D, img_E) VALUES($id_barang, $uid, '$img1', '$img2', '$img3', '$img4', '$img5')";
        $this->db->query($asd);

        redirect('main/barang');
    }
}