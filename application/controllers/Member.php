<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
        $this->load->model('m_house');
        if($this->session->userdata('status') != "member"){
            redirect(site_url("house/login"));
        }

	}
	public function requestPinjam() {
		$this->db->trans_begin();
		$data = array(
			'tanggal_peminjaman' => date('Y-m-d'),
			'id_anggota' => $this->uri->segment(2),
			'id_admin'	=> 1,
			'buku_id_buku' => $this->uri->segment(3),
			'status'	=> 'Permintaan Peminjaman'
		);
		$this->db->insert('peminjaman', $data);
		if ($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    $this->session->set_flashdata('msg', 'Gagal Mengirim Permintaan Perminjaman Buku!');
		}else{
		    $this->db->trans_commit();
		    $this->session->set_flashdata('msg', 'Sukses Mengirim Permintaan Perminjaman Buku!');
		    redirect(site_url().'/House/ViewMore/'.$this->uri->segment(3));
		}
	}
	public function requestPengembalian() {
		$this->db->trans_begin();
		$data = array(
			'status'	=> 'Permintaan Pengembalian'
		);
		$where = array(
			'id_peminjaman'	=> $this->uri->segment(3)
		);
		$this->db->set($data)->where($where)->update('peminjaman');
		if ($this->db->trans_status() === FALSE){
		    $this->db->trans_rollback();
		    $this->session->set_flashdata('msg', 'Gagal Mengirim Permintaan Pengembalian Buku!');
		}else{
		    $this->db->trans_commit();
		    $this->session->set_flashdata('msg', 'Sukses Mengirim Permintaan Pengembalian Buku!');
		    redirect(site_url().'/House/ViewMore/'.$this->uri->segment(2));
		}
	}
	public function pengembalian()
	{
        $data['array_buku']=$this->m_house->getDataPinjam($this->session->userdata('id_anggota'));
		$this->load->view('house', $data);
	}
}