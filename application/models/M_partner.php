<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_partner extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('partner');
        $this->db->order_by('id_partner', 'desc');
        return $this->db->get()->result();
    }
    public function get_data($id_partner)
    {
        $this->db->select('*');
        $this->db->from('partner');
        $this->db->where('id_partner', $id_partner);
        return $this->db->get()->row();  
    }
    public function add($data)
    {
        $this->db->insert('partner', $data);
    }
    public function edit($data)
    {
        $this->db->where('id_partner', $data['id_partner']);
        $this->db->update('partner', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_partner', $data['id_partner']);
        $this->db->delete('partner', $data);
    }
}
