<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gift extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['title'] = 'Gift - Wedding';
        $data['breadcrumb'] = 'Kado Gift';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['gift'] = $this->GiftModel->show()->result();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'admin/gift/v_gift', $data);
        } else {
            $config['upload_path']          = './upload/gift/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['max_size']             = 2048;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gambar anda belum ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Gift');
            } else {
                $gambar      = $this->upload->data();
                $gambar      = $gambar['file_name'];
                $nama        = $this->input->post('nama', true);
                $title       = $this->input->post('title', true);
                $no_rek      = $this->input->post('no_rek', true);
                $no_hp       = $this->input->post('no_hp', true);
                $deskripsi   = $this->input->post('deskripsi', true);

                $data = [
                    'nama'       => $nama,
                    'foto'       => $gambar,
                    'title'      => $title,
                    'no_rek'     => $no_rek,
                    'no_hp'      => $no_hp,
                    'deskripsi'  => $deskripsi
                ];
                $this->GiftModel->insert($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Gift anda sudah berhasil ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Gift');
            }
        }
	}

    public function edit_gift($id)
    {
        $data['title'] = 'Edit Gift - Wedding';
        $data['breadcrumb'] = 'Edit Gift';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');

        $data['gift'] = $this->GiftModel->edit_gift($id);

        // berikan rules untuk mengedit nama user
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        // jalankan form validation
        if ($this->form_validation->run() == false) {

            $this->template->load('layout/main', 'admin/gift/edit_gift', $data);
        } else {

            $nama        = $this->input->post('nama', true);
            $title       = $this->input->post('title', true);
            $no_rek      = $this->input->post('no_rek', true);
            $no_hp       = $this->input->post('no_hp', true);
            $deskripsi   = $this->input->post('deskripsi', true);

            //cek jika ada gambar yang akan diupload
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['allowed_types'] = 'gif|png|jpg|jpeg|JPG|JPEG';
                $config['max_size'] = 2048;
                $config['upload_path'] = './upload/gift/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    // hapus gambar user lama
                    $gambar_lama = $data['gift']['foto'];
                    if ($gambar_lama != 'bg-1.png') {
                        unlink(FCPATH . './upload/gift/' . $gambar_lama);
                    }

                    // upload gambar user baru
                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('foto', $gambar_baru);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $nama);
            $this->db->set('title', $title);
            $this->db->set('no_rek', $no_rek);
            $this->db->set('no_hp', $no_hp);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('gift');

            // buat flash data agar memberi tahu user bahwa data berhasil diedit
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Selamat, Gift Anda berhasil diubah! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
            redirect('Gift');
        }
    }

    public function delete_gift($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->GiftModel->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gift sudah berhasil dihapus 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
        redirect('Gift');
    }

}
