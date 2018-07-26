<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');

    }

    function index(){
        $this->load->view('login');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cekAdmin = $this->db->where($where)->get('admin'); 
        $cekAnggota = $this->db->where($where)->get('anggota'); 
        if($cekAdmin->num_rows() > 0){
            $admin =  $cekAdmin->row_array();

            $data_session = array(
                'nama_admin' => $admin['nama_admin'],
                'id_admin' => $admin['id_admin'],
                'status' => "admin"
            );
            $this->session->set_userdata($data_session);
            redirect(site_url("admin/index"));

        }elseif($cekAnggota->num_rows() > 0){
            $anggota =  $cekAnggota->row_array();
            $data_session = array(
                'nama_anggota' => $anggota['nama_anggota'],
                'id_anggota' => $anggota['id_anggota'],
                'status' => "member"
            );

            $this->session->set_userdata($data_session);

            redirect(site_url("house"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(site_url('house/buku'));
    }
}