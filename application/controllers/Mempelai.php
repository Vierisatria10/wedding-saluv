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
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['mempelai'] = $this->MempelaiModel->mempelai_pria();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('save_the_date', 'Save The Date', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'admin/mempelai/mempelai_pria', $data);
        } else {
            $config['upload_path']          = './upload/mempelai/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gambar anda belum ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Mempelai');
            } else {
                $gambar      = $this->upload->data();
                $gambar      = $gambar['file_name'];
                $nama        = $this->input->post('nama', true);
                $save_the_date = $this->input->post('save_the_date', true);
                $tanggal      = $this->input->post('tanggal', true);
                $alamat       = $this->input->post('alamat', true);
            
                $data = [
                    'nama'       => $nama,
                    'image'       => $gambar,
                    'save_the_date'      => $save_the_date,
                    'tanggal'     => $tanggal,
                    'alamat'      => $alamat,
                
                ];
                $this->MempelaiModel->insert_pria($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Mempelai Pria sudah berhasil ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Mempelai');
            }
        }
	}

    public function delete_pria($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->MempelaiModel->delete_pria($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Mempelai Pria sudah berhasil dihapus 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
        redirect('Mempelai');
    }

    public function mempelai_wanita()
    {
        $data['title'] = 'Mempelai - Wedding';
        $data['breadcrumb'] = 'Mempelai Wanita';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['mempelai_wanita'] = $this->MempelaiModel->mempelai_wanita()->result();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('save_the_date', 'Save The Date', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
       
        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'admin/mempelai/mempelai_wanita.php', $data);
        } else {
            $config['upload_path']          = './upload/mempelai/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gambar anda belum ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Mempelai_wanita');
            } else {
                $gambar      = $this->upload->data();
                $gambar      = $gambar['file_name'];
                $nama        = $this->input->post('nama', true);
                $save_the_date = $this->input->post('save_the_date', true);
                $tanggal      = $this->input->post('tanggal', true);
                $alamat       = $this->input->post('alamat', true);
            
                $data = [
                    'nama'       => $nama,
                    'image'       => $gambar,
                    'save_the_date'      => $save_the_date,
                    'tanggal'     => $tanggal,
                    'alamat'      => $alamat,
                
                ];
                $this->MempelaiModel->insert_wanita($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Mempelai Wanita sudah berhasil ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Mempelai_wanita');
            }
        }
    }
}