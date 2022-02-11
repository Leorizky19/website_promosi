<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_footer extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('footer');
        $this->db->order_by('id_footer', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('footer', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_footer', $data['id_footer']);
        $this->db->update('footer', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_footer', $data['id_footer']);
        $this->db->delete('footer', $data);
    }
} 