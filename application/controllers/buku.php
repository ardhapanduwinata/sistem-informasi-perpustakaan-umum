<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->model('m_buku');
        
    }

	public function index()
	{	
		$this->load->model('m_buku');
		$data['menu']		='menu.php';
		$data['content']	='buku/v_databuku.php';
		$data['data'] = $this->m_buku->getdatabuku(); 
		$this->load->view('v_home.php',$data);
	}
	public function tambah()
	{	
		$data['menu']		='menu.php';
		$data['content']	='buku/v_tambahbuku.php';
		$data['buku']=$this->m_buku->getbuku();
		$this->load->view('v_home.php',$data);
	}

	public function simpan()
	{
		$id=$this->input->post('id_buku');
		$nama_buku=$this->input->post('nama_buku');
		$pengarang=$this->input->post('pengarang');
		$tahun_terbit=$this->input->post('tahun_terbit');
		$nama_penerbit=$this->input->post('nama_penerbit');
		$nama_kategori=$this->input->post('nama_kategori');
		$lokasi=$this->input->post('lokasi');
										
			$info=array(
				'id_buku'=>$id,
				'nama_buku'=>$nama_buku,
				'pengarang'=>$pengarang,
				'tahun_terbit'=>$tahun_terbit,
				'nama_penerbit'=>$nama_penerbit,
				'nama_kategori'=>$nama_kategori,
				'lokasi'=>$lokasi,
			);
			$this->m_buku->getinsert($info);
			redirect('buku');
	}

	public function edit($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='buku/v_editbuku.php';
		$data['data']		=$this->m_buku->cekid($id)->row_array();
		$data['buku']		=$this->m_buku->getbuku();

		$this->load->view('v_home.php',$data);

	}

	public function editproses($id)
	{ 
		$id=$this->input->post('id_buku');
		$nama_buku=$this->input->post('nama_buku');
		$pengarang=$this->input->post('pengarang');
		$tahun_terbit=$this->input->post('tahun_terbit');
		$nama_penerbit=$this->input->post('nama_penerbit');
		$nama_kategori=$this->input->post('nama_kategori');
		$lokasi=$this->input->post('lokasi');
										
			$info=array(
				'id_buku'=>$id,
				'nama_buku'=>$nama_buku,
				'pengarang'=>$pengarang,
				'tahun_terbit'=>$tahun_terbit,
				'nama_penerbit'=>$nama_penerbit,
				'nama_kategori'=>$nama_kategori,
				'lokasi'=>$lokasi,
			);
			$this->m_buku->getupdate($info, $id);
			redirect('buku');
	
	}

public function Hapus($id)
	{	
		$data['menu']		='menu.php';
		$data['content']	='buku/v_hapusbuku.php';
		$data['data']		=$this->m_buku->cekid($id)->row_array();
		$this->load->view('v_home.php',$data);

	}
	public function hapusproses($id)
	{
			$this->m_buku->hapus($id);
			redirect('buku');
	
	}
 }