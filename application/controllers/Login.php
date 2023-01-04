<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		// function untuk login user dan admin
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() ==false) {
			$data['title'] = 'Login - Wedding';
			$this->load->view('v_login', $data);
		}else{
			// valisdasi suksesnya
			$this->_login();
		}
        
	}

	private function _login()
	{
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
		
		// jika ada user
        if ($user) {
            // jika user aktiv
            if ($user['is_active'] == 1) {
                // cek passwordnya benar atau tidak
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('Dashboard');
                    } else {

                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password anda salah!!! 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button></div>');
                    redirect('Login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email anda belum aktif 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Email anda belum terdaftar 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
            redirect('Login');
        }
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Anda sudah Logout!! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
        redirect('Login');
	}

	public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
