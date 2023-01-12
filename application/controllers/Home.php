<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('AkadModel');
		$this->load->model('GaleriModel');
		$this->load->model('MempelaiModel');
    }

	public function index()
	{
        $data['title'] = 'Home - Wedding';
		$data['pengantin_pria'] = 'Pengantin Pria';
		$data['akad'] = $this->AkadModel->show();
		$data['galeri'] = $this->GaleriModel->get_data();
		$data['mempelai'] = $this->MempelaiModel->mempelai_pria();
		$this->load->view('v_home', $data);
	}
}
