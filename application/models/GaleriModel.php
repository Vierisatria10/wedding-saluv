<?php
class GaleriModel extends CI_Model
{
    public function show()
    {
        $this->db->where('main_image = ', 1);
        $this->db->group_by('group_image');
        return $this->db->get('galeri')->result_array();
    }

    public function cekData()
    {
        $this->db->limit(1);
        $this->db->order_by('group_image', 'DESC');
        return $this->db->get('galeri')->row_array(); 
    }

    public function upload_galeri($insert, $data)
    {
        $this->db->insert_batch('galeri', $insert);
        $this->db->set('main_image', 1);
        $this->db->where('foto', $data);
        $this->db->update('galeri');
        return $this->db->affected_rows();

    }

    public function getDataFoto($group)
    {
        return $this->db->get_where('galeri', ['group_image' => $group])->result_array();
    }

    public function delete($id)
    {
        $row = $this->db->where('id', $id)->get('galeri')->row();
        unlink('upload/galeri/'.$row->foto);
        $this->db->where('id', $id);
        $this->db->delete('galeri', ['id' => $id]);
        return true;
    }
}