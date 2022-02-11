<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Media_sosial extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_media_sosial');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Media Sosial',
             'media_sosial' => $this->m_media_sosial->get_all_data(),
             'isi' => 'admin/v_media_sosial',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'nama_media' => $this->input->post('nama_media'),
            'icon' => $this->input->post('icon'),
            'link' => $this->input->post('link'),
        );
        $this->m_media_sosial->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('media_sosial');
    }
//Update one item
public function edit($id_media = NULL)
{
    $data = array(
        'id_media' => $id_media,
        'nama_media' => $this->input->post('nama_media'),
        'icon' => $this->input->post('icon'),
        'link' => $this->input->post('link'),
    );
    
    $this->m_media_sosial->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('media_sosial');
}
 //Delete one item
 public function delete($id_media = NULL)
 {
     $data = array ('id_media' =>$id_media);
     $this->m_media_sosial->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('media_sosial');
 }
    }