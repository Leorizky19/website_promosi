<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Content_about2 extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_content_about2');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Content',
             'content_about2' => $this->m_content_about2->get_all_data(),
             'isi' => 'admin/v_content_about2',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'persen' => $this->input->post('persen'),
        );
        $this->m_content_about2->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('content_about2');
    }
//Update one item
public function edit($id_content = NULL)
{
    $data = array(
        'id_content' => $id_content,
        'text' => $this->input->post('text'),
        'persen' => $this->input->post('persen'),
    );
    
    $this->m_content_about2->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('content_about2');
}
 //Delete one item
 public function delete($id_content = NULL)
 {
     $data = array ('id_content' =>$id_content);
     $this->m_content_about2->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('content_about2');
 }
    }