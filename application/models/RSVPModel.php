<?php
class RSVPModel extends CI_Model
{
    public function show()
    {
        return $this->db->get('rsvp')->result_array();
    }

    public function count_data()
    {
        return $this->db->count_all_results('rsvp');
    }

    public function detail_rsvp($id)
    {
        return $this->db->get_where('rsvp', ['id' => $id])->result_array();
    }

    public function delete($id)
    {
        return $this->db->delete('rsvp', ['id' => $id]);
    }
}