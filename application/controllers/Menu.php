<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $data['title'] = 'Menu - Wedding';
        $data['breadcrumb'] = 'Menu';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['menu'] = $this->db->get_where('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'menu/v_menu', $data);
        } else {
            $menu   = $this->input->post('menu', true);
            $data = [
                'menu' => $menu
            ];
            $this->MenuModel->insertMenu($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Menu sudah berhasil ditambahkan 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'SubMenu - Wedding';
        $data['breadcrumb'] = 'SubMenu';
        $data['rsvp_count'] = $this->RSVPModel->count_data();
        $data['rsvp']	= $this->RSVPModel->show();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');

        $this->load->model('MenuModel', 'menu');
        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        // form validation
        $this->form_validation->set_rules('title', 'Menu', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu_id', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');
        $this->form_validation->set_rules('is_active', 'Aktif', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->load('layout/main', 'menu/submenu', $data);
        } else {

            $title   = $this->input->post('title', true);
            $menu_id   = $this->input->post('menu_id', true);
            $url   = $this->input->post('url', true);
            $icon   = $this->input->post('icon', true);
            $is_active = $this->input->post('is_active', true);

            $data = [
                'title' => $title,
                'menu_id' => $menu_id,
                'url'   => $url,
                'icon'  => $icon,
                'is_active' => $is_active
            ];
            
            $this->MenuModel->insertSubMenu($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            SubMenu sudah berhasil ditambahkan 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button></div>');
            redirect('menu/submenu');
        }
    }

    public function delete_menu($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->MenuModel->delete($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Menu sudah berhasil dihapus 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                </button></div>');
        redirect('menu');
    }
}