<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kategori');
    }

    public function index($offset = 0)
    {
        $data = array(
            'title' => 'Kategori',
            'kategori' => $this->m_kategori->get_all_data(),
            'isi' => 'portofolio/v_kategori',
        );
            $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }

     //Add a new item
     public function add()
     {
         $data = array(
             'nama_kategori' => $this->input->post('nama_kategori'),
         );
         $this->m_kategori->add($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
         redirect('kategori');
     }

     public function edit($id_kategori = NULL)
     {
         $data = array (
             'id_kategori' => $id_kategori,
             'nama_kategori' => $this->input->post('nama_kategori'),
         );
         $this->m_kategori->edit($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!');
         redirect('kategori');
     }

     public function delete($id_kategori = NULL)
     {
         $data = array ('id_kategori' =>$id_kategori);
         $this->m_kategori->delete($data);
         $this->session->set_flashdata('pesan', 'Data Berhasil Diedit!!');
         redirect('kategori');
     }
}