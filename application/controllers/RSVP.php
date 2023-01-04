<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RSVP extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'RSVP - Wedding';
		$data['breadcrumb'] = 'Ucapan Tamu';
		$data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $this->template->load('layout/main', 'admin/rsvp/v_rsvp', $data);
    }

    public function detail_rsvp($id)
    {
        $data['title'] = 'Detail RSVP - Wedding';
        $data['breadcrumb'] = 'Edit RSVP';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['rsvp'] = $this->RSVPModel->detail_rsvp($id);
        $this->template->load('layout/main', 'admin/rsvp/v_detail', $data);
    }

    public function delete_rsvp($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->RSVPModel->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Ucapan Tamu sudah berhasil dihapus 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
        redirect('RSVP');
    }
}