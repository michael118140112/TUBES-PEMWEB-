<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index()
	{
		$data ['judul'] = "Tugas Besar PEMWEB 118140128-118140112-118140031"; 
		$data ['home'] = $this->Home_model->getAllHome();
		$this->load->view('home/index',$data);
	
	}
}
