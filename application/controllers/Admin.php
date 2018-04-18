<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_admin');
        
    }

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_dataadmin.php';
		$data['data']		=$this->db->get('admin');
		$this->load->view('v_home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_tambahadmin.php';
		$this->load->view('v_home.php',$data);
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_editadmin.php';
		$data['data']		=$this->m_admin->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}

	public function editproses($id)
	{
		$nama_admin=$this->input->post('nama_admin'); 
		$alamat_admin=$this->input->post('alamat_admin'); 
		$notelp_admin=$this->input->post('notelp_admin'); 
		$email_admin=$this->input->post('email_admin');
		$foto=$this->input->post('foto');

			$info=array(
				'id_admin'=>$id,
				'nama_admin'=>$nama_admin,
				'alamat_admin'=>$alamat_admin,
				'notelp_admin'=>$notelp_admin,
				'email_admin'=>$email_admin,
				'foto'=>$foto,
			);
			$this->m_admin->getupdate($info, $id);
			redirect('admin');
	
	}

	public function simpan()
	{
		$id_admin=$this->input->post('id_admin');
		$nama_admin=$this->input->post('nama_admin'); 
		$alamat_admin=$this->input->post('alamat_admin'); 
		$notelp_admin=$this->input->post('notelp_admin'); 
		$email_admin=$this->input->post('email_admin');
		$foto=$this->input->post('foto');
		$cek=$this->m_admin->getdataadmin($id_admin);
		if($cek->num_rows()>0){ 				
			redirect('admin/tambah');
		}else { 								
			$info=array(
				'id_admin'=>$id_admin,
				'nama_admin'=>$nama_admin,
				'alamat_admin'=>$alamat_admin,
				'notelp_admin'=>$notelp_admin,
				'email_admin'=>$email_admin,
				'foto'=>$foto,
			);
			$this->m_admin->getinsert($info);
			redirect('admin');
		}
	}


public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_hapusadmin.php';
		$data['data']		=$this->m_admin->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_admin->hapus($id);
			redirect('admin');
	
	}
 }