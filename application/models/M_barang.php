<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        if (empty($this->session->userdata['auth_data'])) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Akses ditolak, silahkan login terlebih dahulu!
            </div>');
            redirect('Auth');
        }
    }

    public function getLost()
    {
        $getdata = "SELECT * FROM barang_hilang LEFT JOIN kategori ON kategori.id_kategori = barang_hilang.id_kategori LEFT JOIN users ON barang_hilang.id_user = users.user_id LEFT JOIN prov ON barang_hilang.id_prov=prov.nomor";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }

    public function getLostSearch($search)
    {
        $getdata = "SELECT * FROM barang_hilang LEFT JOIN kategori ON kategori.id_kategori = barang_hilang.id_kategori LEFT JOIN users ON barang_hilang.id_user = users.user_id LEFT JOIN prov ON barang_hilang.id_prov=prov.nomor WHERE nama_barang LIKE '%$search%' OR des_barang LIKE '%$search%' OR kategori.kategori='$search'";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }

    public function getLostByKat($id)
    {
        $getdata = "SELECT * FROM barang_hilang LEFT JOIN kategori ON kategori.id_kategori = barang_hilang.id_kategori LEFT JOIN users ON barang_hilang.id_user = users.user_id LEFT JOIN prov ON barang_hilang.id_prov=prov.nomor WHERE barang_hilang.id_kategori='$id'";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }

    public function getFilter($id)
    {
        $get = "SELECT kategori FROM kategori  WHERE nomor='$id'";
        $dataraw = $this->db->query($get);
        $data = $dataraw->result_array();
        return $data;
    }


    public function upload()
    {
        $id_user = $this->session->userdata['auth_data']['user_id'];

        // Input from users
        $nama_barang = $this->input->post('nama_barang');
        $id_kat = $this->input->post('id_kat');
        $id_prov = $this->input->post('id_prov');
        $deskripsi = $this->input->post('desc');
        $lokasi = $this->input->post('lokasi');
        $temp_titip = $this->input->post('place');
        $kota = $this->input->post('kota');

        $img_name = $_FILES['image']['name'];


        $add_data = "INSERT INTO barang_hilang(id_user, id_kategori, nama_barang, id_prov, des_barang, lokasi, temp_titip, kota, img_name) VALUES($id_user, $id_kat, '$nama_barang', $id_prov, '$deskripsi', '$lokasi', '$temp_titip', '$kota', '$img_name')";
        $this->db->query($add_data);

        // get id from uploaded data
        $query = "SELECT id_barang FROM barang_hilang WHERE img_name='$img_name'";
        $raw = $this->db->query($query);
        $id_arr = $raw->result_array();
        $id = $id_arr[0]['id_barang'];

        $newimgname = str_replace(' ', '', $img_name);

        // Update nama gambar
        $update_img = "UPDATE barang_hilang SET img_name='$newimgname' WHERE id_barang=$id";
        $this->db->query($update_img);

        // Uplod file/image
        $this->load->helper('form');
        // Upload configuration
        $config['upload_path'] = './image/barang/hilang';
        $config['allowed_types'] = 'jpg|png|jpeg|webp';
        $config['max_size'] = '2048000';
        $config['file_name'] = $newimgname;
        // Adding config
        $this->load->library('upload', $config);
        // Uploading file
        $this->upload->do_upload('image');

        return;
    }

    public function getMybarang($id){
        $getdata = "SELECT * FROM barang_hilang LEFT JOIN kategori ON kategori.id_kategori = barang_hilang.id_kategori LEFT JOIN users ON barang_hilang.id_user = users.user_id LEFT JOIN prov ON barang_hilang.id_prov=prov.nomor WHERE barang_hilang.id_barang='$id'";
        $dataraw = $this->db->query($getdata);
        $data = $dataraw->result_array();
        return $data;
    }


    public function getInfoEdit($uid, $id_barang){
        $get = "SELECT * FROM barang_hilang LEFT JOIN kategori ON kategori.id_kategori = barang_hilang.id_kategori LEFT JOIN prov ON barang_hilang.id_prov=prov.nomor WHERE barang_hilang.id_user='$uid' AND barang_hilang.id_barang='$id_barang'";
        $raw = $this->db->query($get);
        $data = $raw->result_array();
        // echo '<pre>'; print_r($data[0]); echo '</pre>'; die();
        return $data[0];
    }


    public function saveUpdateData($uid, $id_barang){
        $img_status = $_FILES['image']['name'];
        if(empty($img_status)){
            $nama = $this->input->post('nama_barang');
            $lokasi = $this->input->post('lokasi');
            $id_kat = $this->input->post('id_kat');
            $deskripsi = $this->input->post('desc');
            $tempat_titip = $this->input->post('place');
            $id_prov = $this->input->post('id_prov');
            $kota = $this->input->post('kota');

            $update = "UPDATE barang_hilang SET nama_barang='$nama', id_prov=$id_prov, id_kategori=$id_kat, des_barang='$deskripsi', lokasi='$lokasi', temp_titip='$tempat_titip', kota='$kota' WHERE id_user='$uid' AND id_barang='$id_barang'";
            $this->db->query($update);
        }
        else{
            $nama_gambar = $this->upImage($uid, $id_barang);

            $nama = $this->input->post('nama_barang');
            $lokasi = $this->input->post('lokasi');
            $id_kat = $this->input->post('id_kat');
            $deskripsi = $this->input->post('desc');
            $tempat_titip = $this->input->post('place');
            $id_prov = $this->input->post('id_prov');
            $kota = $this->input->post('kota');
    
            $update = "UPDATE barang_hilang SET nama_barang='$nama', id_prov=$id_prov, id_kategori=$id_kat, des_barang='$deskripsi', lokasi='$lokasi', temp_titip='$tempat_titip', kota='$kota', img_name='$nama_gambar' WHERE id_user='$uid' AND id_barang='$id_barang'";
            $this->db->query($update);
        }

        return;
    }

    private function upImage($uid, $id_barang){
        $q = "SELECT img_name FROM barang_hilang WHERE id_user='$uid' AND id_barang='$id_barang'";
        $raw = $this->db->query($q)->result_array();
        $old_img = $raw[0]['img_name'];
        $path = './image/barang/hilang/';
        $remove = $path.$old_img;
        unlink($remove);

        $img_name = $_FILES['image']['name'];
        $newimgname = str_replace(' ', '', $img_name);

        // Uplod file/image
        $this->load->helper('form');
        // Upload configuration
        $config['upload_path'] = './image/barang/hilang';
        $config['allowed_types'] = 'jpg|png|jpeg|webp';
        $config['max_size'] = '2048000';
        $config['file_name'] = $newimgname;
        // Adding config
        $this->load->library('upload', $config);
        // Uploading file
        $this->upload->do_upload('image');

        return $newimgname;
    }

    public function deleteData($id){
        $asad = "SELECT img_name FROM barang_hilang WHERE id_barang=$id";
        $asf = $this->db->query($asad)->result_array();
        $img = $asf[0]['img_name'];
        $path = './image/barang/hilang/';
        $rem = $path.$img;
        unlink($rem);


        $wer = "DELETE FROM barang_hilang WHERE id_barang=$id";
        $this->db->query($wer);
        return;
    }

    public function getVerifData($id){
        // $raw = $this->db->get_where('barang_hilang', array('id_barang' => $id));
        $qwe = "SELECT * FROM barang_hilang LEFT JOIN prov ON barang_hilang.id_prov = prov.nomor LEFT JOIN kategori ON barang_hilang.id_kategori = kategori.nomor WHERE barang_hilang.id_barang=$id";
        $raw = $this->db->query($qwe);
        $data = $raw->result_array();

        return $data[0];
    }

    public function getUser($id_barang){
        $qwr = "SELECT id_user FROM barang_hilang WHERE id_barang=$id_barang";
        $id_raw = $this->db->query($qwr);
        $idx = $id_raw->result_array();
        $id = $idx[0]['id_user'];


        $raw = $this->db->get_where('users', array('user_id' => $id));
        $data = $raw->result_array();
        return $data[0];
    }

    
    public function doImgVerifUpload($name){
        $img_name = $_FILES[$name]['name'];
        $new_name = str_replace(' ', '', $img_name);

        $this->load->helper('form');

        $config['upload_path'] = './image/request/';
        $config['allowed_types'] = 'jpg|png|jpeg|webp';
        $config['max_size'] = '2048000';
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        $this->upload->do_upload($name);

        return $new_name;
    }

    public function getReq($uid){
        $oit = "SELECT * FROM verif_request LEFT JOIN barang_hilang ON verif_request.id_barang = barang_hilang.id_barang LEFT JOIN users ON barang_hilang.id_user = users.user_id WHERE verif_request.id_user=$uid";
        $raw = $this->db->query($oit);
        $data = $raw->result_array();
        return $data;
    }
}
