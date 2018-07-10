<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');

    }

    function index(){
        $this->load->view('v_home');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("admin"));

        }elseif($cek < 1){
            $this->m_login->cek_login("anggota",$where)->num_rows();

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            redirect(base_url("house"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
//    public function __construct()
//    {
//        parent::__construct();
//        $this->load->helper('url');
//        $this->load->helper('form');
//        $this->load->library('form_validation');
//        $this->load->model('m_login');
//
//    }
//
//
//    public function index()
//    {
//        $this->load->view('house');
//    }
//
//    public function kelogin()
//    {
//        $this->load->view('login');
//    }
//
//    public function login()
//    {
//        //validasi pada borang username dan memunculkan pesan error secara custom
//        // format penulisan set_rules: $this->form_validation->set_rules('namainput', 'NamaYangAkanDimunculkanJikaTerjadiError', 'aturan',
//        // array(
//        //     	'aturanYangSudahDituliskan'      => 'PesanErrorYangInginDitampilkan'
//        //   	));
//        $this->form_validation->set_rules('username', 'Username', 'required',
//            array(
//                'required'      => 'Baris Username Harus diisi'
//            ));
//
//        //validasi pada borang password
//        $this->form_validation->set_rules('password', 'Password', 'required',
//            array(
//                'required'      => 'Baris Password Harus diisi'
//            ));
//
//        //jika terdapat input yang error, kembali ke view login
//        if($this->form_validation->run() == FALSE){
//            $this->load->view('login');
//        }
//
//        //jika semua input valid
//        elseif ($this->form_validation->run() == TRUE) {
//            $username = $this->input->post('username');
//
//            //mengubah password yang diinputkan ke MD5
//            $password = $this->input->post('password');
//
//            //mengambil data Pengguna dan disimpan pada array
//            $data['user'] = $this->m_login->getData($username, $password);
//
//            //jika nilai data tidak false
//            if($data['user']!=false){
//
//                //menentukan level user
//                $levelUser = $this->m_login->getLevel($username, $password);
//
//                //jika level user tidak false
//                if ($levelUser) {
//
//                    //menyatukan data user dan level ke dalam suatu array
//                    foreach ($data['user'] as $key) {
//                        $arrayDataUser = array(
//                            'userid' => $key['id_anggota'],
//                            'nama' => $key['nama_anggota']
//                        );
//                    }
//
//                    //membuat session baru sesuai dengan data yang ada pada array $arrayDataUser
//                    $this->session->set_userdata($arrayDataUser);
//
//                    //membuat pesan sukses
//                    $this->session->set_flashdata('loggedIn', 'Selamat Datang, '.$_SESSION['nama']);
//
//                    //jika user memiliki level 1, maka akan diarahkan ke halaman user biasa
//                    if($levelUser==1){
//                        redirect('admin/index');
//                    }
//
//                    //jika memiliki level 2, maka akan diarahkan ke halaman admin
//                    elseif ($levelUser==2) {
//                        redirect('house/index');
//                    }
//                }
//            }
//
//            //jika data username tidak ditemukan, mengembalikan ke halaman login dengan pesan error
//            elseif ($data['user']==false){
//                $this->session->set_flashdata('invalidLogin', 'Username atau password salah');
//                $this->load->view('login');
//            }
//
//        }
//    }
//    // public function transaksi()
//    // {
//    // 	$this->load->view('transaksi');
//    // }