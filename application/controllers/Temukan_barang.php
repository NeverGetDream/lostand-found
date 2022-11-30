<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temukan_barang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Home');
	}

	public function index(){
		$this->load->view('temukan-barang');
	}
}