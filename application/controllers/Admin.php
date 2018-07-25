<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
        if($this->session->userdata('status') != "admin"){
            redirect(site_url("house/login"));
        }

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
		$cover_admin=$_FILES['cover_admin']['name'];
		if($cover_admin=''){}else
		{
			$this->load->library('upload');
			$config['upload_path']          = './assets/path/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
			if(! $this->upload->do_upload('cover_admin'))
			{
				$error=array('error'=>$this->upload->display_errors());
				print_r($error); die ();
			}
			else
			{
				unlink('./assets/path/'.$this->input->post('foto_old'));
				$cover_admin=$this->upload->data('file_name');
			}
		}

		$info=array(
			'id_admin'=>$id,
			'nama_admin'=>$nama_admin,
			'alamat_admin'=>$alamat_admin,
			'notelp_admin'=>$notelp_admin,
			'email_admin'=>$email_admin,
			'cover_admin'=>$cover_admin,
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
<<<<<<< HEAD
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$foto=$_FILES['foto']['name'];
=======
		$cover_admin=$_FILES['cover_admin']['name'];
>>>>>>> 92b9a93b50ed68c553c0eed2ef99b37c5f9b2f21

		if($cover_admin='')
		{

		}
		else
		{
			$this->load->library('upload');
			$config['upload_path']          = './assets/path/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
			if(! $this->upload->do_upload('cover_admin'))
			{
				$error=array('error'=>$this->upload->display_errors());
				print_r($error); die ();
			}
			else
			{
				$cover_admin=$this->upload->data('file_name');
			}
		}								
		$info=array(
			'id_admin'=>$id_admin,
			'nama_admin'=>$nama_admin,
			'alamat_admin'=>$alamat_admin,
			'notelp_admin'=>$notelp_admin,
			'email_admin'=>$email_admin,
<<<<<<< HEAD
			'username'=>$username,
			'password'=>$password,
			'foto'=>$foto
=======
			'cover_admin'=>$cover_admin
>>>>>>> 92b9a93b50ed68c553c0eed2ef99b37c5f9b2f21
		);
		$this->db->insert('admin',$info);
		redirect('admin');

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