<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_register');

    }

    function index(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_anggota','Nama','required');
        $this->form_validation->set_rules('alamat_anggota','alamat','required');
        $this->form_validation->set_rules('notelp_anggota','notelp','required');
        $this->form_validation->set_rules('email_anggota','email','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == false) {
            $this->load->view('register');
        }else{
            $config['upload_path'] = './assets/path/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('foto')){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('register',$data);
            }
            else{
                $post = $this->input->post();
                $post['password'] = md5($post['password']);
                $post['foto'] = $this->upload->data('file_name');
                $this->db->insert('anggota',$post);
                redirect('Login','refresh');
            }

        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(site_url('house/login'));
    }
}