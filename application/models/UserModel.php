<?php
class UserModel extends CI_Model
{
    public function data_role()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function akses_role($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }
}