<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_media_sosial extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('media_sosial');
        $this->db->order_by('id_media', 'desc');
        return $this->db->get()->result();
    }
    
    public function add($data)
    {
        $this->db->insert('media_sosial', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_media', $data['id_media']);
        $this->db->update('media_sosial', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_media', $data['id_media']);
        $this->db->delete('media_sosial', $data);
    }
} 