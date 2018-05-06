<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_kategori');
		
	}

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='kategori/v_datakategori.php';
		$data['data']		=$this->db->get('kategori');
		$this->load->view('v_home.php',$data);
	}
	public function tambah()
	{	
		$data['message'] = "";
		$this->load->library("form_validation");
		$this->form_validation->set_rules('id_penerbit','ID','required');
		$this->form_validation->set_rules('nama_penerbit','Nama','required');


		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		if($this->form_validation->run()==FALSE){
			$data['menu']		='menu.php';
			$data['content']	='kategori/v_tambahkategori.php';
			$this->load->view('v_home.php',$data);
		}
		else{
			$id_kategori=$this->input->post('id_kategori');
			$nama_kategori=$this->input->post('nama_kategori');
			$lokasi=$this->input->post('lokasi'); 
			$cek=$this->m_kategori->getdatakategori($id_kategori);
			if($cek->num_rows()>0){ 				
				redirect('kategori/tambah');
			}else { 								
				$info=array(
					'id_kategori'=>$id_kategori,
					'nama_kategori'=>$nama_kategori,
					'lokasi'=>$lokasi,
				);
				$this->m_kategori->getinsert($info);
				redirect('kategori');
			}
		}
		
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kategori/v_editkategori.php';
		$data['data']		=$this->m_kategori->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}

	public function editproses($id)
	{
		$nama_kategori=$this->input->post('nama_kategori');
		$lokasi=$this->input->post('lokasi');  


		$info=array(
			'id_kategori'=>$id,
			'nama_kategori'=>$nama_kategori,
			'lokasi'=>$lokasi,
		);
		$this->m_kategori->getupdate($info, $id);
		redirect('kategori');
		
	}

	public function simpan()
	{
		
	}


	public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='kategori/v_hapuskategori.php';
		$data['data']		=$this->m_kategori->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}
	public function hapusproses($id)
	{
		$this->m_kategori->hapus($id);
		redirect('kategori');
		
	}
}