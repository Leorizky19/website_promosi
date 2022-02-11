<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Hub extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_hub');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Under Service',
             'hub' => $this->m_hub->get_all_data(),
             'isi' => 'admin/v_hub',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
            'link' => $this->input->post('link'),
        );
        $this->m_hub->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('hub');
    }
//Update one item
public function edit($id_hub = NULL)
{
    $data = array(
        'id_hub' => $id_hub,
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
        'link' =>$this->input->post('link')
    );
    
    $this->m_hub->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('hub');
}
 //Delete one item
 public function delete($id_hub = NULL)
 {
     $data = array ('id_hub' =>$id_hub);
     $this->m_hub->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('hub');
 }
    }