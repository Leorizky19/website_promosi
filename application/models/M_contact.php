<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->order_by('id_contact', 'desc');
        return $this->db->get()->result();
    }
    
   // public function add($data)
    //{
      //  $this->db->insert('contact', $data);
    //}


    public function delete($data)
    {
        $this->db->where('id_contact', $data['id_contact']);
        $this->db->delete('contact', $data);
    }
} 