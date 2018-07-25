<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('m_house');

    }
	public function index()
	{
        $data['array_buku']=$this->m_house->getBuku();
		$this->load->view('house', $data);
        redirect(site_url("house/buku"));
        
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
        $data['pengembalian'] = $this->db->where('id_peminjaman',$this->uri->segment(4))->get('peminjaman')->row_array();
       
        $this->load->view('buku/buku_viewPinjam.php',$data);
    }
    public function buku()
    {
        $this->load->model('m_buku');
      
        $data['array_buku'] = $this->m_buku->getBuku();
        
        $limit_per_page=3;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records= $this->m_buku->get_total();

        if($total_records > 0 ){
            $data['array_buku'] = $this->m_buku->get_all_artikel($limit_per_page,$start_index);
            $config['base_url'] = base_url().'index.php/house/buku';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config['uri_segment'] = 3;

            $this->pagination->initialize($config);

            $data['links'] = $this->pagination->create_links();
        }

        $this->load->view('house',$data);
    }
}
