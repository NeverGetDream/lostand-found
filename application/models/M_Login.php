<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {
    public function login(){
        $email = $this->input->post('email');
		$pass = $this->input->post('password');
        $login_sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
        $login_result = $this->db->query($login_sql);
        return $login_result;
    }
}