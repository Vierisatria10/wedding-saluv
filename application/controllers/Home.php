<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Home - Wedding';
		$this->load->view('v_home', $data);
	}
}
