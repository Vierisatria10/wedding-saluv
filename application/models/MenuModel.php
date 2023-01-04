<?php
class MenuModel extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function insertMenu($data)
    {
        return $this->db->insert('user_menu', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('user_menu', ['id' => $id]);
    }
}