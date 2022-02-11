<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Address extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_address');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Address',
             'address' => $this->m_address->get_all_data(),
             'isi' => 'admin/v_address',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
     public function add()
    {
        $data = array(
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'telepon' => $this->input->post('telepon'),
        );
        $this->m_address->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
        redirect('address');
    }
//Update one item
public function edit($id_address = NULL)
{
    $data = array(
        'id_address' => $id_address,
        'alamat' => $this->input->post('alamat'),
        'email' => $this->input->post('email'),
        'telepon' => $this->input->post('telepon'),
    );
    
    $this->m_address->edit($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
    redirect('address');
}
 //Delete one item
 public function delete($id_address = NULL)
 {
     $data = array ('id_address' =>$id_hub);
     $this->m_address->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('address');
 }
    }