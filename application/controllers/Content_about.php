<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Content_about extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_content_about');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Content',
             'content_about' => $this->m_content_about->get_all_data(),
             'isi' => 'admin/v_content_about',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
        );
        $this->m_content_about->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('content_about');
    }
//Update one item
public function edit($id_content = NULL)
{
    $data = array(
        'id_content' => $id_content,
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
    );
    
    $this->m_content_about->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('content_about');
}
 //Delete one item
 public function delete($id_content = NULL)
 {
     $data = array ('id_content' =>$id_content);
     $this->m_content_about->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('content_about');
 }
    }