<?php
class MempelaiModel extends CI_Model
{
    public function mempelai_pria()
    {
        return $this->db->get('mempelai_pria');
    }

    public function mempelai_wanita()
    {
        return $this->db->get('mempelai_wanita');
    }
}