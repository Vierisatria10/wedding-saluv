<?php
class MenuModel extends CI_Model
{
    // get data menu
    public function get_data()
    {
        return $this->db->get('user_menu')->result_array();
    }
    // get data sub menu
    public function get_data_submenu()
    {
        return $this->db->get_where('user_menu')->result_array();
    }
    // get join submenu
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`. *, `user_menu`. `menu`
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`. `menu_id` = `user_menu`. `id` 
        ";
        return $this->db->query($query)->result_array();
    }
    // insert menu
    public function insertMenu($data)
    {
        return $this->db->insert('user_menu', $data);
    }
    // insert sub menu
    public function insertSubMenu($data)
    {
        return $this->db->insert('user_sub_menu', $data);
    }
    // delete menu
    public function delete($id)
    {
        return $this->db->delete('user_menu', ['id' => $id]);
    }
}