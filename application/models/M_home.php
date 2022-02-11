<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('banner_image');
        return $this->db->get()->result();
    }
    public function get_all_data_partner()
    {
        $this->db->select('*');
        $this->db->from('partner');
        return $this->db->get()->result();
    }

    public function get_all_data_about()
    {
        $this->db->select('*');
        $this->db->from('about');
        return $this->db->get()->result();
    }
    public function get_all_data_header_about()
    {
        $this->db->select('*');
        $this->db->from('header_about');
        return $this->db->get()->result();
    }

    public function get_all_data_content_about()
    {
        $this->db->select('*');
        $this->db->from('content_about');
        return $this->db->get()->result();
    }
    public function get_all_data_header_about2()
    {
        $this->db->select('*');
        $this->db->from('header_about2');
        return $this->db->get()->result();
    }
    public function get_all_data_content_about2()
    {
        $this->db->select('*');
        $this->db->from('content_about2');
        return $this->db->get()->result();
    }

    public function get_all_data_service()
    {
        $this->db->select('*');
        $this->db->from('service');
        return $this->db->get()->result();
    }
    public function get_all_data_hub()
    {
        $this->db->select('*');
        $this->db->from('hub');
        return $this->db->get()->result();
    }

    public function get_all_data_header_pricing()
    {
        $this->db->select('*');
        $this->db->from('header_pricing');
        return $this->db->get()->result();
    }

    public function get_all_data_pricing()
    {
        $this->db->select('*');
        $this->db->from('pricing');
        return $this->db->get()->result();
    }

    public function get_all_data_portofolio()
    {
        $this->db->select('*');
        $this->db->from('portofolio');
        return $this->db->get()->result();
    }

    public function get_all_data_footer()
    {
        $this->db->select('*');
        $this->db->from('footer');
        return $this->db->get()->result();
    }
    public function get_all_data_media_sosial()
    {
        $this->db->select('*');
        $this->db->from('media_sosial');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $this->db->insert('contact', $data);
        //print_r($_POST);exit;
    }

    public function get_all_data_address()
    {
        $this->db->select('*');
        $this->db->from('address');
        return $this->db->get()->result();
    }

    public function add_form($data)
    {
        $this->db->insert('form_pengajuan', $data);
        
    }
}