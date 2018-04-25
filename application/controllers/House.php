<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class House extends CI_Controller {

	public function index()
	{
		$data['content'] = 'content.php';
		$data['menu'] 	= 'menu.php';
		$this->load->view('house', $data);
	}

	public function login()
    {
        $data['content'] = 'content.php';
        $data['menu'] 	= 'menu.php';
        $this->load->view('v_home', $data);
    }
}
