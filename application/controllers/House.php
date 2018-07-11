<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_house');

    }
	public function index()
	{
        $this->load->view('header');
        $data['array_buku']=$this->m_house->getBuku();
		$this->load->view('house', $data);
        $this->load->view('footer');
	}

	public function login()
    {
        $data['content'] = 'content.php';
        $data['menu'] 	= 'menu.php';
        $this->load->view('login', $data);
    }
}
