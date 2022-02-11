<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Partner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_partner');
    }
    public function index ()
    {
        $data = array(
            'title' => 'Partner',
            'partner' => $this->m_partner->get_all_data(),
            'isi' => 'partner/v_partner',
        );
            $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }

     //add a new item
     public function add()
     {
         $this->form_validation->set_rules('nama_partner', 'Nama Partner', 'required', array('required'
         => '%s Harus Diisi!!'));
 
         if ($this->form_validation->run() == TRUE){
         $config['upload_path'] = './upload/partner';
         $config['allowed_types'] = 'png|jpg|jpeg|gif|ico';
         $config['max_size'] = 4048;
         $this->upload->initialize($config);
         $field_name='image';
         if(!$this->upload->do_upload($field_name)){
             $data = array(
             'title' => 'Add Partner',
             'error_upload' => $this->upload->display_errors(),
             'isi' => 'partner/v_add',
         );
         $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
         }else{
             $upload_data = array ('uploads' =>$this->upload->data());
                 $config['image_library']= 'gd2';
                 $config['source_image'] =  './upload/partner/' .$upload_data['uploads']['file_name'];
                 $this->load->library('image_lib', $config);
                 $data = array (
                     'nama_partner' => $this->input->post('nama_partner'),
                     'image' => $upload_data['uploads']['file_name'],
                 );
                 $this->m_partner->add($data);
                 $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                 redirect('partner');
             }
         }
         $data = array(
             'title' => 'Add Partner',
             'isi' => 'partner/v_add',
         );
         $this->load->view('layouts/admin/v_wrapper', $data ,FALSE);
     }
        // edit Banner
    public function edit($id_partner = NULL)
    {
        $this->form_validation->set_rules('nama_partner', 'Nama Partner', 'required', array('required'
        => '%s Harus Diisi!!'));
    
        if ($this->form_validation->run() == TRUE){
        $config['upload_path'] = './upload/partner/';
        $config['allowed_types'] = 'png|jpg|jpeg|gif|ico';
        $config['max_size'] = 4048;
        $this->upload->initialize($config);
        $field_name='image';
        if(!$this->upload->do_upload($field_name)){
            $data = array(
            'title' => 'Edit Partner',
            'partner' => $this->m_partner->get_data($id_partner),
            'error_upload' => $this->upload->display_errors(),
            'isi' => 'partner/v_edit',
        );
        $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
        }else{
             //Hapus Gambar
        $partner = $this->m_partner->get_data($id_partner);
        if ($partner->image != "") {
            unlink('./upload/partner/' .$partner->image);
        }
        //end
                $upload_data = array ('uploads' =>$this->upload->data());
                $config['image_library']= 'gd2';
                $config['source_image'] =  'upload/partner/' .$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array (
                    'id_partner' => $id_partner,
                    'nama_partner' => $this->input->post('nama_partner'),
                    'image' => $upload_data['uploads']['file_name'],
                );
                $this->m_partner->edit($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
                redirect('partner');
            }
            //Jika Tanpa Ganti Gambar
            $data = array (
                'id_partner' => $id_partner,
                'nama_partner' => $this->input->post('nama_partner'),
                
            );
            $this->m_partner->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('partner');
        }
        $data = array(
            
            'title' => 'Edit Partner',
            'partner' => $this->m_partner->get_data($id_partner),
            'isi' => 'partner/v_edit',
        );
        $this->load->view('layouts/admin/v_wrapper', $data ,FALSE);
    }
    public function delete($id_partner = NULL)
    {
        //Hapus Gambar
        $partner = $this->m_partner->get_data($id_partner);
        if ($partner->image != "") {
            unlink('./upload/partner/' .$partner->image);
        }
        //end
        $data = array('id_partner' => $id_partner);
        $this->m_partner->delete($data);
        $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
        redirect('partner');
    }
} 