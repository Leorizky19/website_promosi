<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_service extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->order_by('id_service', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('service', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_service', $data['id_service']);
        $this->db->update('service', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_service', $data['id_service']);
        $this->db->delete('service', $data);
    }
} 