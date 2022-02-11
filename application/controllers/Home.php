<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

	public function index()
	{
		$data = array(
            'title' => 'Home',
            'banner' => $this->m_home->get_all_data(),
            'partner' => $this->m_home->get_all_data_partner(),
            'about' => $this->m_home->get_all_data_about(),
            'header_about' =>$this->m_home->get_all_data_header_about(),
            'content_about' =>$this->m_home->get_all_data_content_about(),
            'header_about2' =>$this->m_home->get_all_data_header_about2(),
            'content_about2' =>$this->m_home->get_all_data_content_about2(),
            'service' => $this->m_home->get_all_data_service(),
            'hub' => $this->m_home->get_all_data_hub(),
            'header_pricing' =>$this->m_home->get_all_data_header_pricing(),
            'pricing' =>$this->m_home->get_all_data_pricing(),
            'portofolio' =>$this->m_home->get_all_data_portofolio(),
            'footer' =>$this->m_home->get_all_data_footer(),
            'media_sosial' =>$this->m_home->get_all_data_media_sosial(),
            'address' =>$this->m_home->get_all_data_address(),
            'isi' => 'home/index',
        );
        $this->load->view('layouts/front-end/v_wrapper', $data, FALSE);
	}
    public function add()
    {
         $data = array(
         'nama' => $this->input->post('nama'),
         'email' => $this->input->post('email'),
         'subjek' => $this->input->post('subjek'),
         'pesan' => $this->input->post('pesan'),
        );
        $this->m_home->add($data);
        $this->session->set_flashdata('pesan' , 'Pesan Berhasil Dikirim, Admin akan Membalas secepatnya:) !!!');
        redirect ('home');
    }
    
    public function add_form()
    {
         $data = array(
         'nama' => $this->input->post('nama'),
         'perusahaan' => $this->input->post('perusahaan'),
         'karyawan' => $this->input->post('karyawan'),
         'telepon' => $this->input->post('telepon'),
         'email' => $this->input->post('email'),
         'jabatan' => $this->input->post('jabatan'),
        );
        $this->m_home->add_form($data);
        $this->session->set_flashdata('pesan' , 'Pesan Berhasil Dikirim, Admin akan Membalas via Email untuk link ujicoba!!!');
        redirect ('home/form_pengajuan');
    }
    public function form_pengajuan()
    {
        $this->load->view('home/form_pengajuan');
    }
   
}
