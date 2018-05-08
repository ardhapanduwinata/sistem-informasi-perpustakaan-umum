<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_house extends CI_model
{
    function getBuku()
    {
        $query = $this->db->query("select * from buku");
        return $query->result_array();
    }
}