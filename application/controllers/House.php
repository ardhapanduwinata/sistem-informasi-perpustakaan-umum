<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_house');

    }
	public function index()
	{
        $data['array_buku']=$this->m_house->getBuku();
		$this->load->view('house', $data);
	}

	public function login()
    {
        $data['content'] = 'content.php';
        $data['menu'] 	= 'menu.php';
        $this->load->view('login', $data);
    }

    public function ViewMore()
    {
        $data['rows'] = $this->db->where('id_buku',$this->uri->segment(3))->get('buku')->row_array();
        $this->load->view('buku/buku_view.php',$data);
    }
    public function ViewMorePengembalian()
    {
        $data['rows'] = $this->db->where('id_buku',$this->uri->segment(3))->get('buku')->row_array();
        $this->load->view('buku/buku_viewPinjam.php',$data);
    }
}
