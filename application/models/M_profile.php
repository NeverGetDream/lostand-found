<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function getData($uid){
        $get = "SELECT * FROM users WHERE user_id=$uid";
        $profile = $this->db->query($get);
        $data = $profile->result_array();
        return $data[0];
    }

    public function getGreeting(){
        date_default_timezone_set("Asia/Makassar");

        $b = time();
        $hour = date("G", $b);

        if ($hour >= 0 && $hour <= 11) {
            $gret = 'pagi';
        }
        elseif ($hour >= 12 && $hour <= 14) {
            $gret = 'siang';
        }
        elseif ($hour >= 15 && $hour <= 17) {
            $gret = 'sore';
        }
        elseif ($hour >= 17 && $hour <= 18) {
            $gret = 'petang';
        }
        elseif ($hour >= 19 && $hour <= 23) {
            $gret = 'malam';
        }
        else{
            $gret = 'datang';
        }

        return $gret;
    }

    public function getInfoBarang(){
        $uid = $this->session->userdata['auth_data']['user_id'];
        $jbarang = $this->db->get_where('barang_hilang', array('id_user' => $uid))->num_rows();
        // $jfound = $this->db->get_where('barang_ditemukan' array(''));

        $data = [
            'upload' => $jbarang,
            'ditemukan' => 0
        ];
        return $data;
    }


    public function updateDataWithImage($uid){
        $fname = htmlspecialchars($this->input->post('fname', true));
        $lname = htmlspecialchars($this->input->post('bname', true));
        $hp = htmlspecialchars($this->input->post('no_hp', true));
        $prov = htmlspecialchars($this->input->post('provinsi', true));
        $kota = htmlspecialchars($this->input->post('kota', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));
        $img = $_FILES['new_img']['name'];

        $updateData = "UPDATE users SET
            first_name = '$fname',
            last_name = '$lname',
            no_hp = '$hp',
            provinsi = '$prov',
            kota = '$kota',
            alamat = '$alamat',
            image = '$img'
        WHERE user_id=$uid";

        // Update Data
        $this->db->query($updateData);


        // Image Upload
        
    }

    public function updateDataOnly($uid){
        $fname = htmlspecialchars($this->input->post('fname', true));
        $lname = htmlspecialchars($this->input->post('bname', true));
        $hp = htmlspecialchars($this->input->post('no_hp', true));
        $prov = htmlspecialchars($this->input->post('provinsi', true));
        $kota = htmlspecialchars($this->input->post('kota', true));
        $alamat = htmlspecialchars($this->input->post('alamat', true));

        $updateData = "UPDATE users SET
            first_name = '$fname',
            last_name = '$lname',
            no_hp = '$hp',
            provinsi = '$prov',
            kota = '$kota',
            alamat = '$alamat'
        WHERE user_id=$uid";

        // Update Data
        $this->db->query($updateData);
    }


    public function updateSession($uid){
        // Hapus data dari sesi
        $this->session->unset_userdata('auth_data');

        // Mengambil data baru
        $new_data = $this->db->get_where('users', ['user_id' => $uid])->row_array();
        $this->session->set_userdata('auth_data', $new_data);
    }
}