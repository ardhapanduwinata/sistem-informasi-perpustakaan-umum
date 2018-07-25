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

	 public function history()
    {   
        $data['history']=$this->m_house->gethistory();
        $this->load->view('history',$data);
    }
    public function edit_profile()
    {
    	$data['rows'] = $this->db->where('id_anggota',$this->session->userdata('id_anggota'))->get('anggota')->row_array();
    	$this->load->library('form_validation');
        $this->form_validation->set_rules('nama_anggota','Nama','required');
        $this->form_validation->set_rules('alamat_anggota','alamat','required');
        $this->form_validation->set_rules('notelp_anggota','notelp','required');
        $this->form_validation->set_rules('email_anggota','email','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        if ($this->form_validation->run() == false) {
            $this->load->view('edit_profile',$data);
        }else{
            $config['upload_path'] = './assets/path/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '10000';
            $config['max_width']  = '10240';
            $config['max_height']  = '7680';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('foto')){
                $data['error'] = $this->upload->display_errors();
                $this->load->view('edit_profile',$data);
            }
            else{
                $post = $this->input->post();
                $post['password'] = md5($post['password']);
                $post['foto'] = $this->upload->data('file_name');
                $this->db->where('id_anggota',$this->session->userdata('id_anggota'))->update('anggota',$post);
                redirect('House/buku','refresh');
            }

        }
    }
}