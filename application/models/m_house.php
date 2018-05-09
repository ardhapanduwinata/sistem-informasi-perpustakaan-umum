<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_house extends CI_model {
    public function __construct()
    {
        parent::__construct();
    }
    public function getBuku()
    {
        $array=$this->db->query("select * from buku");
        return $array->result_array();
    }
}