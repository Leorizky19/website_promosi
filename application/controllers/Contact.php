<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Contact extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_contact');
        //load depedencies
    }
     //list all your items
     public function index()
     {
         $data = array(
             'title' => 'Contact',
             'contact' => $this->m_contact->get_all_data(),
             'isi' => 'admin/v_contact',
         );
             $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
     }
   //  public function add()
    //{
      ///  $data = array(
         //   'nama' => $this->input->post('nama'),
           // 'email' => $this->input->post('email'),
            //'subjek' => $this->input->post('subjek'),
            //'pesan' => $this->input->post('pesan'),
        //);
        //$this->m_contact->add($data);
        //$this->session->set_flashdata('pesan', 'Pesan Anda Telah Dikirim, Mohon Tunggu Balasan Dari Admin Terimakasih:)');
        //redirect('contact');
   // }


 //Delete one item
 public function delete($id_contact = NULL)
 {
     $data = array ('id_contact' =>$id_contact);
     $this->m_contact->delete($data);
     $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
     redirect('contact');
 }
    }