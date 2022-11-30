<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Login');
		$this->load->database();
	}

	public function index(){
		$this->load->view('login');
	}

	public function user_login(){
		$this->load->model('login');
		$result = $this->M_Login->login();

		if ($result != 1){
			redirect('login');
		}
	}
}
