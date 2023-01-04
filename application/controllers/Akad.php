<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akad extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['title'] = 'Akad - Wedding';
        $data['breadcrumb'] = 'Akad';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');

        $data['akad'] = $this->AkadModel->show();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('link_maps', 'Link Maps', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'admin/akad/v_akad', $data);
        } else {
            $config['upload_path']          = './upload/akad/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Gambar anda belum ditambahkan </div>');
                redirect('Akad');
            } else {
                $gambar      = $this->upload->data();
                $gambar      = $gambar['file_name'];
                $judul       = $this->input->post('judul', true);
                $jam         = $this->input->post('jam', true);
                $alamat      = $this->input->post('alamat', true);
                $no_hp       = $this->input->post('no_hp', true);
                $link_maps   = $this->input->post('link_maps', true);

                $data = [
                    'judul'       => $judul,
                    'image'      => $gambar,
                    'jam'         => $jam,
                    'alamat'      => $alamat,
                    'no_hp'       => $no_hp,
                    'link_maps'   => $link_maps
                ];
                $this->AkadModel->insert($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Akad anda sudah berhasil ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('akad');
            }
        }
	}

    public function edit_akad($id)
    {
        $data['title'] = 'Edit Akad - Wedding';
        $data['breadcrumb'] = 'Edit Akad';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');

        $data['akad'] = $this->AkadModel->edit_akad($id);

        // berikan rules untuk mengedit nama user
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('jam', 'Jam', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('link_maps', 'Link Maps', 'required');

        // jalankan form validation
        if ($this->form_validation->run() == false) {

            $this->template->load('layout/main', 'admin/akad/edit_akad', $data);
        } else {

            $judul       = $this->input->post('judul', true);
            $jam         = $this->input->post('jam', true);
            $alamat      = $this->input->post('alamat', true);
            $no_hp       = $this->input->post('no_hp', true);
            $link_maps   = $this->input->post('link_maps', true);

            //cek jika ada gambar yang akan diupload
            $upload_gambar = $_FILES['image']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|png|jpg';
                $config['max_size'] = 2048;
                $config['upload_path'] = './upload/akad/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // hapus gambar user lama
                    $gambar_lama = $data['akad']['image'];
                    if ($gambar_lama != 'bg-1.png') {
                        unlink(FCPATH . './upload/akad/' . $gambar_lama);
                    }

                    // upload gambar user baru
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('judul', $judul);
            $this->db->set('jam', $jam);
            $this->db->set('alamat', $alamat);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('link_maps', $link_maps);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('akad');

            // buat flash data agar memberi tahu user bahwa data berhasil diedit
            $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            Selamat, Akad anda anda berhasil diubah! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
            redirect('akad');
        }
    }

    public function delete_akad($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->AkadModel->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Akad sudah berhasil dihapus 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
        redirect('Akad');
    }
}