<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class About extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_about');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'About',
             'about' => $this->m_about->get_all_data(),
             'isi' => 'admin/v_about',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
        );
        $this->m_about->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('about');
    }
//Update one item
public function edit($id_about = NULL)
{
    $data = array(
        'id_about' => $id_about,
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
    );
    
    $this->m_about->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('about');
}
 //Delete one item
 public function delete($id_about = NULL)
 {
     $data = array ('id_about' =>$id_about);
     $this->m_about->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('about');
 }
    }