<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_header_about extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('header_about');
        $this->db->order_by('id_header', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('header_about', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_header', $data['id_header']);
        $this->db->update('header_about', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_header', $data['id_header']);
        $this->db->delete('header_about', $data);
    }
} 