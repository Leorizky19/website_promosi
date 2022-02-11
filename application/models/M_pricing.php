<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pricing extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('pricing');
        $this->db->order_by('id_pricing', 'desc');
        return $this->db->get()->result();
    }
    public function add($data)
    {
        $this->db->insert('pricing', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_pricing', $data['id_pricing']);
        $this->db->update('pricing', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_pricing', $data['id_pricing']);
        $this->db->delete('pricing', $data);
    }
} 