<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_address extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('address');
        $this->db->order_by('id_address', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
     $this->db->insert('address', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_address', $data['id_address']);
        $this->db->update('address', $data);
    }
    public function delete($data)
    {
        $this->db->where('id_address', $data['id_address']);
        $this->db->delete('address', $data);
    }
} 