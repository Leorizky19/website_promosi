<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_content_about2 extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('content_about2');
        $this->db->order_by('id_content', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('content_about2', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_content', $data['id_content']);
        $this->db->update('content_about2', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_content', $data['id_content']);
        $this->db->delete('content_about2', $data);
    }
} 