<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_hub extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('hub');
        $this->db->order_by('id_hub', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('hub', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_hub', $data['id_hub']);
        $this->db->update('hub', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_hub', $data['id_hub']);
        $this->db->delete('hub', $data);
    }
} 