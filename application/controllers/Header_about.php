<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Header_about extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_header_about');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Header About',
             'header_about' => $this->m_header_about->get_all_data(),
             'isi' => 'admin/v_header_about',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
        );
        $this->m_header_about->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('header_about');
    }
//Update one item
public function edit($id_header = NULL)
{
    $data = array(
        'id_header' => $id_header,
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
    );
    
    $this->m_header_about->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('header_about');
}
 //Delete one item
 public function delete($id_header = NULL)
 {
     $data = array ('id_header' =>$id_header);
     $this->m_header_about->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('header_about');
 }
    }