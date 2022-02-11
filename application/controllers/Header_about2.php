<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Header_about2 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_header_about2');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Header About2',
             'header_about2' => $this->m_header_about2->get_all_data(),
             'isi' => 'admin/v_header_about2',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
        );
        $this->m_header_about2->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('header_about2');
    }
//Update one item
public function edit($id_header = NULL)
{
    $data = array(
        'id_header' => $id_header,
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
    );
    
    $this->m_header_about2->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('header_about2');
}
 //Delete one item
 public function delete($id_header = NULL)
 {
     $data = array ('id_header' =>$id_header);
     $this->m_header_about2->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('header_about2');
 }
    }