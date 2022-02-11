<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_form_pengajuan extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('form_pengajuan');
        $this->db->order_by('id_form', 'desc');
        return $this->db->get()->result();
    }
    
   // public function add($data)
    //{
      //  $this->db->insert('contact', $data);
    //}


    public function delete($data)
    {
        $this->db->where('id_form', $data['id_form']);
        $this->db->delete('form_pengajuan', $data);
    }
} 