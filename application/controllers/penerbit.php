<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_penerbit');

	}

	public function index()
	{	
		$data['menu']		='menu.php';
		$data['content']	='penerbit/v_datapenerbit.php';
		$data['data']		=$this->db->get('penerbit');
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
			$data['content']	='penerbit/v_tambahpenerbit.php';
			$this->load->view('v_home.php',$data);
		}
		else{
			$id_penerbit=$this->input->post('id_penerbit');
			$nama_penerbit=$this->input->post('nama_penerbit'); 
			$cek=$this->m_penerbit->getdatapenerbit($id_penerbit);
			if($cek->num_rows()>0){ 				
				redirect('penerbit/tambah');
			}else { 								
				$info=array(
					'id_penerbit'=>$id_penerbit,
					'nama_penerbit'=>$nama_penerbit,
				);
				$this->m_penerbit->getinsert($info);
				redirect('penerbit');
			}
		}
		
	}

	public function edit($id)
	{	
		$data['message'] = "";
		$this->load->library("form_validation");
		$this->form_validation->set_rules('id_penerbit','ID','required');
		$this->form_validation->set_rules('nama_penerbit','Nama','required');


		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		if($this->form_validation->run()==FALSE){
			$data['menu']		='menu.php';
			$data['content']	='penerbit/v_editpenerbit.php';
			$data['data']		=$this->m_penerbit->cekid($id)->row_array();
			$this->load->view('v_home.php',$data);
		}
		else{
			$nama_penerbit=$this->input->post('nama_penerbit'); 
			$info=array(
				'id_penerbit'=>$id,
				'nama_penerbit'=>$nama_penerbit,
			);
			$this->m_penerbit->getupdate($info, $id);
			redirect('penerbit');
		}
		

	}


	public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='penerbit/v_hapuspenerbit.php';
		$data['data']		=$this->m_penerbit->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}
	public function hapusproses($id)
	{
		$this->m_penerbit->hapus($id);
		redirect('penerbit');

	}
}