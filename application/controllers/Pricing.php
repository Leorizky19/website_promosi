<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Pricing extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pricing');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Pricing',
             'pricing' => $this->m_pricing->get_all_data(),
             'isi' => 'pricing/v_pricing',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'header' => $this->input->post('header'),
            'text' => $this->input->post('text'),
            'harga' => $this->input->post('harga'),
            'link' => $this->input->post('link'),
        );
        $this->m_pricing->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('pricing');
    }
//Update one item
public function edit($id_pricing = NULL)
{
    $data = array(
            'id_pricing' => $id_pricing,
            'header' => $this->input->post('header'),
            'text' => $this->input->post('text'),
            'harga' => $this->input->post('harga'),
            'link' => $this->input->post('link'),
    );
    
    $this->m_pricing->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('pricing');
}
 //Delete one item
 public function delete($id_pricing = NULL)
 {
     $data = array ('id_pricing' =>$id_pricing);
     $this->m_service->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('pricing');
 }
    }