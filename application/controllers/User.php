<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['title'] = 'User - Wedding';
        $data['breadcrumb'] = 'My Profile';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
		$data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->template->load('layout/main', 'user/v_user', $data);
	}

    public function edit()
    {
        $data['title'] = 'User - Wedding';
        $data['breadcrumb'] = 'Edit Profile';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
		$data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Nama', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'user/edit', $data);
        }else{
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

            // cek jika ada gambar yang diupload
            $upload_gambar = $_FILES['image']['name'];
            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|png|jpg|jpg|jpeg';
                $config['max_size'] = '1024';
                $config['upload_path'] = './upload/user/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // hapus gambar user lama
                    $gambar_lama = $data['user']['image'];
                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'upload/user/' . $gambar_lama);
                    }

                    // upload gambar user baru
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            // buat flash data agar memberi tahu user bahwa data berhasil diedit
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            Selamat, Data anda berhasil diubah! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
            redirect('user');
        }
       
    }

    public function gantipassword()
    {
        $data['title'] = 'User - Wedding';
        $data['breadcrumb'] = 'Ganti Password';
         // rsvp count
         $data['rsvp_count'] = $this->RSVPModel->count_data();
         // rsvp
         $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // set rulesnya 
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password1baru', 'Password Baru', 'required|trim|min_length[3]|matches[password2baru]');
        $this->form_validation->set_rules('password2baru', 'Konfirmasi Password', 'required|trim|min_length[3]|matches[password1baru]');


        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'user/gantipassword', $data);
        } else {
            $password_saatini = $this->input->post('password_lama');
            $password_baru = $this->input->post('password1baru');
            if (!password_verify($password_saatini, $data['user']['password'])) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password saat ini salah! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
                redirect('User/gantipassword');
            } else {
                if ($password_saatini == $password_baru) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password tidak boleh sama dengan yang lama ! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button></div>');
                    redirect('User/gantipassword');
                } else {
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Password anda telah diganti ! 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button></div>');
                    redirect('User/gantipassword');
                }
            }
        }
    }

    // role user
    public function role()
    {
        $data['title'] = 'Role - Wedding';
        $data['breadcrumb'] = 'Role User';
        // rsvp count
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        // rsvp
        $data['rsvp']	= $this->RSVPModel->show();
        // role data
        $data['role']   = $this->UserModel->data_role();
		$data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->template->load('layout/main', 'user/v_role', $data);
    }

    public function akses_role($role_id)
    {
        $data['title'] = 'Role - Wedding';
        $data['breadcrumb'] = 'Akses Role';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	    = $this->RSVPModel->show();

        $data['role']       = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
		$data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->template->load('layout/main', 'user/akses_role', $data);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert">
        Akses telah dirubah !! </div>');
    }
}
