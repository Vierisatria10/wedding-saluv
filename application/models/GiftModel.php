<?php
class GiftModel extends CI_Model
{
    public function show()
    {
        return $this->db->get('gift');
    }

    public function insert($data)
    {
        return $this->db->insert('gift', $data);
    }

    public function edit_gift($id)
    {
        return $this->db->get_where('gift', ['id' => $id])->row_array();
    }

    public function delete($id)
    {
    return $this->db->delete('gift', ['id' => $id]);
    }
}
