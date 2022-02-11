<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Service extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_service');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Service',
             'service' => $this->m_service->get_all_data(),
             'isi' => 'admin/v_service',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'text' => $this->input->post('text'),
            'texts' => $this->input->post('texts'),
            'icon' => $this->input->post('icon'),
        );
        $this->m_service->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('service');
    }
//Update one item
public function edit($id_service = NULL)
{
    $data = array(
        'id_service' => $id_service,
        'text' => $this->input->post('text'),
        'texts' => $this->input->post('texts'),
        'icon' =>$this->input->post('icon')
    );
    
    $this->m_service->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('service');
}
 //Delete one item
 public function delete($id_service = NULL)
 {
     $data = array ('id_service' =>$id_service);
     $this->m_service->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('service');
 }
    }