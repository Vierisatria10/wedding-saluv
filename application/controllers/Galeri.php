<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['title'] = 'Galeri - Wedding';
        $data['breadcrumb'] = 'Galeri';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['galeri'] = $this->GaleriModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->template->load('layout/main', 'admin/galeri/v_galeri', $data);
	}

    public function detail($group)
    {
        $data['title'] = 'Galeri - Wedding';
        $data['breadcrumb'] = 'Detail Galeri';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['foto'] = $this->GaleriModel->getDataFoto($group);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->template->load('layout/main', 'admin/galeri/v_detail', $data);
    }

    public function upload_galeri()
    {
        $upload = $_FILES['foto']['name'];
        if ($upload) {
            $numberOfFiles = sizeof($upload);
            $files = $_FILES['foto'];
            $config['allowed_types'] = 'gif|png|jpeg|jpg|JPG|JPEG';
            $config['max_size'] = '2048';
            $config['upload_path'] = './upload/galeri/';
            $this->load->library('upload', $config);

            for ($i=0; $i < $numberOfFiles; $i++) { 
                $_FILES['foto']['name'] = $files['name'][$i];
                $_FILES['foto']['type'] = $files['type'][$i];
                $_FILES['foto']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['foto']['error'] = $files['error'][$i];
                $_FILES['foto']['size'] = $files['size'][$i];

                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto')) {
                    $data = $this->upload->data();
                    $imageName = $data['file_name'];
                    $cek = $this->GaleriModel->cekData();
                    if (!$cek) {
                        $groupImage = 1;
                    }else{
                        $groupImage = $cek['group_image'] + 1;
                    }
                    $insert[$i]['foto'] = $imageName;
                    $insert[$i]['group_image'] = $groupImage;
                }
            }
            if (!$insert && !$data) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                Tidak ada data yang disimpan
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
                redirect('Galeri');
            }else{
                if($this->GaleriModel->upload_galeri($insert, $data['file_name']) > 0){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Upload Galeri berhasil diSimpan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button></div>');
                    redirect('Galeri');
                }else{
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data tidak berhasil di Upload
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                    </button></div>');
                    redirect('Galeri');
                }
            }

        }
        
    }

    public function delete($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->GaleriModel->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Foto Galeri sudah berhasil dihapus 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
        redirect('Galeri');
    }

    // public function upload_file($name)
    // {
    //     $uploadPath = './upload/galeri/';
    //     if (!is_dir($uploadPath)) {
    //         mkdir($uploadPath,0777,TRUE);
    //     }

    //     $config['upload_path'] = $uploadPath;
    //     $config['allowed_types'] = 'png,jpeg,jpg,gif,PNG';
    //     $config['encrypt_name'] = TRUE;

    //     $this->load->library('upload', $config);
    //     $this->upload->initialize($config);
    //     if ($this->upload->do_upload($name)) {
    //         $fileData = $this->upload->data();
    //         return $fileData['file_name'];
    //     }else{
    //         return false;
    //     }
    // }
}