<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Footer extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_footer');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Footer',
             'footer' => $this->m_footer->get_all_data(),
             'isi' => 'admin/v_footer',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'kontak' => $this->input->post('kontak'),
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
            'sosial_media' => $this->input->post('sosial_media'),
        );
        $this->m_footer->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('footer');
    }
//Update one item
public function edit($id_footer = NULL)
{
    $data = array(
        'id_footer' => $id_footer,
        'kontak' => $this->input->post('kontak'),
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
        'sosial_media' => $this->input->post('sosial_media'),
    );
    
    $this->m_footer->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('footer');
}
 //Delete one item
 public function delete($id_footer = NULL)
 {
     $data = array ('id_footer' =>$id_footer);
     $this->m_footer->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('footer');
 }
    }