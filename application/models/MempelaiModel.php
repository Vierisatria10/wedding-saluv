<?php
class MempelaiModel extends CI_Model
{
    public function mempelai_pria()
    {
        return $this->db->get('mempelai_pria')->result_array();
    }

    public function insert_pria($data)
    {
        return $this->db->insert('mempelai_pria', $data);
    }

    public function mempelai_wanita()
    {
        return $this->db->get('mempelai_wanita');
    }
}