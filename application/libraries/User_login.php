<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login 
{
    protected $ci;
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($email, $password)
    {
        $cek = $this->ci->m_auth->login_user($email, $password);
        if ($cek) {
            $nama_user = $cek->nama_user;
            $email = $cek->email;
            $level_user= $cek->level_user;
            //buat session
            $this->ci->session->set_userdata('email', $email);
            $this->ci->session->set_userdata('nama_user', $nama_user);
            $this->ci->session->set_userdata('level_user', $level_user);
            redirect('admin');
            
        }else{
            //jika salah
            $this->ci->session->set_flashdata('error', 'Email Atau Password Salah');
            redirect('auth/login_user');
        }
    }

    public function proteksi_halaman()
    {
        if($this->ci->session->userdata('email') == ''){
            $this->ci->session->set_flashdata('error', 'Anda Belum Login !!');
            redirect('auth/login_user'); 
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('email');
        $this->ci->session->unset_userdata('nama_user');
        $this->ci->session->unset_userdata('level_user');
        $this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout !!');
        redirect('auth/login_user');
    }
}