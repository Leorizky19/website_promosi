<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_banner extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('banner_image');
        $this->db->order_by('id_banner', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_banner)
    {
        $this->db->select('*');
        $this->db->from('banner_image');
        $this->db->where('id_banner', $id_banner);
        return $this->db->get()->row();  
    }

    public function add($data)
    {
        $this->db->insert('banner_image', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_banner', $data ['id_banner']);
        $this->db->update('banner_image', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_banner', $data ['id_banner']);
        $this->db->delete('banner_image', $data);
    }
}