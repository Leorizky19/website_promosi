<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Header_pricing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_header_pricing');
    }

    public function index($offset = 0)
    {
        $data = array(
            'title' => 'Pricing | Header',
            'header_pricing' => $this->m_header_pricing->get_all_data(),
            'isi' => 'pricing/v_header_pricing',
        );
            $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }

     //Add a new item
     public function add()
     {
         $data = array(
             'text' => $this->input->post('text'),
         );
         $this->m_header_pricing->add($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
         redirect('header_pricing');
     }

     public function edit($id_header = NULL)
     {
         $data = array (
             'id_header' => $id_header,
             'text' => $this->input->post('text'),
         );
         $this->m_header_pricing->edit($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!');
         redirect('header_pricing');
     }

     public function delete($id_header = NULL)
     {
         $data = array ('id_header' =>$id_header);
         $this->m_header_pricing->delete($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!');
         redirect('header_pricing');
     }
}