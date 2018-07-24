<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_anggota');
        if($this->session->userdata('status') != "admin"){
            redirect(site_url("house/login"));
        }
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='anggota/v_dataanggota.php';
		$data['data']		=$this->db->get('anggota');
		$this->load->view('v_home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='anggota/v_tambahanggota.php';
		$this->load->view('v_home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='anggota/v_editanggota.php';
		$data['data']		=$this->m_anggota->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}

	public function editproses($id)
	{
		$nama_anggota=$this->input->post('nama_anggota');
		$alamat_anggota=$this->input->post('alamat_anggota'); 
		$notelp_anggota=$this->input->post('notelp_anggota'); 
		$email_anggota=$this->input->post('email_anggota');
		$username=$this->input->post('username');
		$password=$this->input->post('password'); 
		$foto=$this->input->post('foto');

			$info=array(
				'id_anggota'=>$id,
				'nama_anggota'=>$nama_anggota,
				'alamat_anggota'=>$alamat_anggota,
				'notelp_anggota'=>$notelp_anggota,
				'email_anggota'=>$email_anggota,
				'username'=>$username,
				'password'=>$password,
				'foto'=>$foto,
			);
			$this->m_anggota->getupdate($info, $id);
			redirect('anggota');
	
	}

	public function simpan()
	{
		$id_anggota=$this->input->post('id_anggota');
		$nama_anggota=$this->input->post('nama_anggota');
		$alamat_anggota=$this->input->post('alamat_anggota'); 
		$notelp_anggota=$this->input->post('notelp_anggota'); 
		$email_anggota=$this->input->post('email_anggota');
		$username=$this->input->post('username');
		$password=$this->input->post('password'); 
		$foto=$this->input->post('foto');
		$cek=$this->m_anggota->getdataanggota($id_anggota);
		if($cek->num_rows()>0){ 				
			redirect('anggota/tambah');
		}else { 								
			$info=array(
				'id_anggota'=>$id_anggota,
				'nama_anggota'=>$nama_anggota,
				'alamat_anggota'=>$alamat_anggota,
				'notelp_anggota'=>$notelp_anggota,
				'email_anggota'=>$email_anggota,
				'username'=>$username,
				'password'=>$password,
				'foto'=>$foto,
			);
			$this->m_anggota->getinsert($info);
			redirect('anggota');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='anggota/v_hapusanggota.php';
		$data['data']		=$this->m_anggota->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_anggota->hapus($id);
			redirect('anggota');
	
	}
 }