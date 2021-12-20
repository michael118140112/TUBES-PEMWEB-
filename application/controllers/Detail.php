<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
        $this->load->model('Detail_model');
		
	}
    
    public function index()
    {
        $data ['judul'] = "Tugas Besar PEMWEB 118140128-118140112-118140031"; 
        $data ['detail'] = $this->Detail_model->getDetailLaporan();
        $this->load->view('detail/index',$data);
     
    }
}

?>