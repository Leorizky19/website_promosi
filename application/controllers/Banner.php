<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Banner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_banner');
    }
    public function index ()
    {
        $data = array(
            'title' => 'Banner Image',
            'banner' => $this->m_banner->get_all_data(),
            'isi' => 'banner/v_banner',
        );
            $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }

    //add a new item
    public function add()
    {
        $this->form_validation->set_rules('text1', 'Text Header', 'required', array('required'
        => '%s Harus Diisi!!'));

        $this->form_validation->set_rules('text2', 'Text', 'required', array('required'
        => '%s Harus Diisi!!'));

        if ($this->form_validation->run() == TRUE){
        $config['upload_path'] = './upload/banner';
		$config['allowed_types'] = 'png|jpg|jpeg|gif|ico';
		$config['max_size'] = 4048;
        $this->upload->initialize($config);
        $field_name='image';
        if(!$this->upload->do_upload($field_name)){
            $data = array(
            'title' => 'Add Banner',
            'error_upload' => $this->upload->display_errors(),
            'isi' => 'banner/v_add',
        );
        $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
        }else{
            $upload_data = array ('uploads' =>$this->upload->data());
                $config['image_library']= 'gd2';
                $config['source_image'] =  './upload/banner/' .$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array (
                    'text1' => $this->input->post('text1'),
                    'text2' => $this->input->post('text2'),
                    'image' => $upload_data['uploads']['file_name'],
                );
                $this->m_banner->add($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!');
                redirect('banner');
            }
        }
        $data = array(
            'title' => 'Add Banner',
            'isi' => 'banner/v_add',
        );
        $this->load->view('layouts/admin/v_wrapper', $data ,FALSE);
    }

    // edit Banner
    public function edit($id_banner = NULL)
{
    $this->form_validation->set_rules('text1', 'Text Header', 'required', array('required'
    => '%s Harus Diisi!!'));

    $this->form_validation->set_rules('text2', 'Text', 'required', array('required'
    => '%s Harus Diisi!!'));

    if ($this->form_validation->run() == TRUE){
    $config['upload_path'] = './upload/banner/';
    $config['allowed_types'] = 'png|jpg|jpeg|gif|ico';
    $config['max_size'] = 4048;
    $this->upload->initialize($config);
    $field_name='image';
    if(!$this->upload->do_upload($field_name)){
        $data = array(
        'title' => 'Edit Banner',
        'banner' => $this->m_banner->get_data($id_banner),
        'error_upload' => $this->upload->display_errors(),
        'isi' => 'banner/v_edit',
    );
    $this->load->view('layouts/admin/v_wrapper', $data, FALSE);
    }else{
         //Hapus Gambar
    $banner = $this->m_banner->get_data($id_banner);
    if ($banner->image != "") {
        unlink('./upload/banner/' .$banner->image);
    }
            $upload_data = array ('uploads' =>$this->upload->data());
            $config['image_library']= 'gd2';
            $config['source_image'] =  'upload/banner/' .$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);
            $data = array (
                'id_banner' => $id_banner,
                'text1' => $this->input->post('text1'),
                'text2' => $this->input->post('text2'),
                'image' => $upload_data['uploads']['file_name'],
            );
            $this->m_banner->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
            redirect('banner');
        }
        //Jika Tanpa Ganti Gambar
        $data = array (
            'id_banner' => $id_banner,
            'text1' => $this->input->post('text1'),
            'text2' => $this->input->post('text2'),
        );
        $this->m_banner->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diedit !!');
        redirect('banner');
    }
    $data = array(
        
        'title' => 'Edit Banner',
        'banner' => $this->m_banner->get_data($id_banner),
        'isi' => 'banner/v_edit',
    );
    $this->load->view('layouts/admin/v_wrapper', $data ,FALSE);
}
public function delete($id_banner = NULL)
{
    //Hapus Gambar
    $banner = $this->m_banner->get_data($id_banner);
    if ($banner->image != "") {
        unlink('./upload/banner/' .$banner->image);
    }
    //end
    $data = array('id_banner' => $id_banner);
    $this->m_banner->delete($data);
    $this->session->set_flashdata('pesan' , 'Data Berhasil Dihapus !!!');
    redirect('banner');
}
}
