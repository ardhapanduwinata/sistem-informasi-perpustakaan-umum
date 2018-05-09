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
		$data['message'] = "";
		$this->load->library("form_validation");
		$this->form_validation->set_rules('id_admin','ID','required');
		$this->form_validation->set_rules('nama_admin','Nama','required');
		$this->form_validation->set_rules('alamat_admin','Alamat','required');
		$this->form_validation->set_rules('notelp_admin','No Telp','required');
		$this->form_validation->set_rules('email_admin','Email','required');


		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

<<<<<<< HEAD
	public function editproses($id)
	{
		$nama_admin=$this->input->post('nama_admin'); 
		$alamat_admin=$this->input->post('alamat_admin'); 
		$notelp_admin=$this->input->post('notelp_admin'); 
		$email_admin=$this->input->post('email_admin');
		$foto=$_FILES['foto']['name'];
		if($foto=''){}else
		{
			$this->load->library('upload');
			$config['upload_path']          = './assets/path/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
			if(! $this->upload->do_upload('foto'))
			{
				$error=array('error'=>$this->upload->display_errors());
				print_r($error); die ();
			}
			else
			{
				unlink('./assets/path/'.$this->input->post('foto_old'));
				$foto=$this->upload->data('file_name');
			}
		}

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
		$foto=$_FILES['foto']['name'];

		if($foto='')
		{

		}
		else
		{
			$this->load->library('upload');
			$config['upload_path']          = './assets/path/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
			if(! $this->upload->do_upload('foto'))
=======

		if($this->form_validation->run()==FALSE){
			$data['menu']		='menu.php';
			$data['content']	='admin/v_tambahadmin.php';
			$this->load->view('v_home.php',$data);
		}
		else{
			$id_admin=$this->input->post('id_admin');
			$nama_admin=$this->input->post('nama_admin'); 
			$alamat_admin=$this->input->post('alamat_admin'); 
			$notelp_admin=$this->input->post('notelp_admin'); 
			$email_admin=$this->input->post('email_admin');
			$foto=$_FILES['foto']['name'];

			if($foto='')
			{

			}
			else
>>>>>>> c70f93819fdad8c0c188f376e52219bb606d0484
			{
				$error=array('error'=>$this->upload->display_errors());
				print_r($error); die ();
			}
			else
			{
				$foto=$this->upload->data('file_name');
			}
		}
		// $cek=$this->m_admin->getdataadmin($id_admin);
		// if($cek->num_rows()>0){ 				
		// 	redirect('admin/tambah');
		// }else { 								
		$info=array(
			'id_admin'=>$id_admin,
			'nama_admin'=>$nama_admin,
			'alamat_admin'=>$alamat_admin,
			'notelp_admin'=>$notelp_admin,
			'email_admin'=>$email_admin,
			'foto'=>$foto
		);
		$this->db->insert('admin',$info);
			// $this->m_admin->getinsert($info);
		redirect('admin');
		// }
		}
		
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='admin/v_editadmin.php';
		$data['data']		=$this->m_admin->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}

<<<<<<< HEAD
=======
	public function editproses($id)
	{
		$nama_admin=$this->input->post('nama_admin'); 
		$alamat_admin=$this->input->post('alamat_admin'); 
		$notelp_admin=$this->input->post('notelp_admin'); 
		$email_admin=$this->input->post('email_admin');
		$foto=$_FILES['foto']['name'];
		if($foto=''){}else
		{
			$config['upload_path']='./assets/path/';
			$config['allowed_types']='gif|jpg|png';
			$this->load->library('upload',$config);
			if(! $this->upload->do_upload('foto'))
			{
				$error=array('error'=>$this->upload->display_errors());
			}
			else
			{
				$foto=$this->upload->data('file_name');
			}
		}

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


>>>>>>> c70f93819fdad8c0c188f376e52219bb606d0484
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