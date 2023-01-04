<?php
class MenuModel extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('user_menu')->result_array();
    }
}