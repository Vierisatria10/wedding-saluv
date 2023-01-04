<?php
class AkadModel extends CI_Model
{
    public function show()
    {
        return $this->db->get('akad')->result_array();
    }

    public function edit_akad($id)
    {
        return $this->db->get_where('akad', ['id' => $id])->row_array();
    }

    public function insert($data)
    {
        return $this->db->insert('akad', $data);
    }

    public function delete($id)
    {
    return $this->db->delete('akad', ['id' => $id]);
    }
}