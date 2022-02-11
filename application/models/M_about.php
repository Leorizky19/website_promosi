<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->order_by('id_about', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('about', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_about', $data['id_about']);
        $this->db->update('about', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_about', $data['id_about']);
        $this->db->delete('about', $data);
    }
} 