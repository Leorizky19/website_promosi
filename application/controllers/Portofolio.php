<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_portofolio');
    }
    public function index ()
    {
        $data = array(
            'title' => 'Portofolio',
            'portofolio' => $this->m_portofolio->get_all_data(),
            'isi' => 'portofolio/v_portofolio',
        );
            $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }

    //add a new item
    public function add()
    {
        $this->form_validation->set_rules('keys', 'Keyword', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('title', 'Title', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('text', 'Text', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('link', 'Link', 'required', array('required'
        => '%s Harus Diisi!!'));

        if ($this->form_validation->run() == TRUE){
        $config['upload_path'] = './upload/portofolio';
		$config['allowed_types'] = 'png|jpg|jpeg|gif|ico';
		$config['max_size'] = 4048;
        $this->upload->initialize($config);
        $field_name='image';
        if(!$this->upload->do_upload($field_name)){
            $data = array(
            'title' => 'Add Portofolio',
            'error_upload' => $this->upload->display_errors(),
            'isi' => 'portofolio/v_add',
        );
        $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
        }else{
            $upload_data = array ('uploads' =>$this->upload->data());
                $config['image_library']= 'gd2';
                $config['source_image'] =  './upload/portofolio/' .$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array (
                    'keys' => $this->input->post('keys'),
                    'title' => $this->input->post('title'),
                    'text' => $this->input->post('text'),
                    'link' => $this->input->post('link'),
                    'image' => $upload_data['uploads']['file_name'],
                );
                $this->m_portofolio->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('portofolio');
            }
        }
        $data = array(
            'title' => 'Add Portofolio',
            'isi' => 'portofolio/v_add',
        );
        $this->load->view('layouts/admin/v_wrapper', $data ,FALSE);
    }

    // edit Banner
    public function edit($id_portofolio = NULL)
{
    $this->form_validation->set_rules('keys', 'Keyword', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('title', 'Title', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('text', 'Text', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('link', 'Link', 'required', array('required'
        => '%s Harus Diisi!!'));

    if ($this->form_validation->run() == TRUE){
    $config['upload_path'] = './upload/portofolio/';
    $config['allowed_types'] = 'png|jpg|jpeg|gif|ico';
    $config['max_size'] = 4048;
    $this->upload->initialize($config);
    $field_name='image';
    if(!$this->upload->do_upload($field_name)){
        $data = array(
        'title' => 'Edit Portofolio',
        'portofolio' => $this->m_portofolio->get_data($id_portofolio),
        'error_upload' => $this->upload->display_errors(),
        'isi' => 'portofolio/v_edit',
    );
    $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }else{
         //Hapus Gambar
    $portofolio = $this->m_portofolio->get_data($id_portofolio);
    if ($portofolio->image != "") {
        unlink('./upload/portofolio/' .$portofolio->image);
    }
            $upload_data = array ('uploads' =>$this->upload->data());
            $config['image_library']= 'gd2';
            $config['source_image'] =  'upload/portofolio/' .$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
            $data = array (
                'id_portofolio' => $id_portofolio,
                'keys' => $this->input->post('keys'),
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'link' => $this->input->post('link'),
                'image' => $upload_data['uploads']['file_name'],
            );
            $this->m_portofolio->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('portofolio');
        }
        //Jika Tanpa Ganti Gambar
        $data = array (
                'id_portofolio' => $id_portofolio,
                'keys' => $this->input->post('keys'),
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text'),
                'link' => $this->input->post('link'),
        );
        $this->m_portofolio->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
        redirect('portofolio');
    }
    $data = array(
        
        'title' => 'Edit Portofolio',
        'portofolio' => $this->m_portofolio->get_data($id_portofolio),
        'isi' => 'portofolio/v_edit',
    );
    $this->load->view('layouts/admin/v_wrapper', $data ,FALSE);
}
public function delete($id_portofolio = NULL)
{
    //Hapus Gambar
    $portofolio = $this->m_portofolio->get_data($id_portofolio);
    if ($portofolio->image != "") {
        unlink('./upload/portofolio/' .$portofolio->image);
    }
    //end
    $data = array('id_portofolio' => $id_portofolio);
    $this->m_portofolio->delete($data);
    $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
    redirect('portofolio');
}
}
