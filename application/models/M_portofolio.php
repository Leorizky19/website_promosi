<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_portofolio extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('portofolio');
        $this->db->order_by('id_portofolio', 'desc');
        return $this->db->get()->result();
    }

    public function get_data($id_portofolio)
    {
        $this->db->select('*');
        $this->db->from('portofolio');
        $this->db->where('id_portofolio', $id_portofolio);
        return $this->db->get()->row();  
    }

    public function add($data)
    {
        $this->db->insert('portofolio', $data);
    }

    public function edit($data)
    {
        $this->db->where('id_portofolio', $data ['id_portofolio']);
        $this->db->update('portofolio', $data);
    }

    public function delete($data)
    {
        $this->db->where('id_portofolio', $data ['id_portofolio']);
        $this->db->delete('portofolio', $data);
    }
}