<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mempelai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['title'] = 'Mempelai - Wedding';
        $data['breadcrumb'] = 'Mempelai Pria';
        $data['mempelai'] = $this->MempelaiModel->mempelai_pria()->result();
        $this->template->load('layout/main', 'admin/mempelai/mempelai_pria', $data);
	}

    public function mempelai_wanita()
    {
        $data['title'] = 'Mempelai - Wedding';
        $data['breadcrumb'] = 'Mempelai Wanita';
        $data['mempelai_wanita'] = $this->MempelaiModel->mempelai_wanita()->result();
        $this->template->load('layout/main', 'admin/mempelai/mempelai_wanita', $data);
    }
}