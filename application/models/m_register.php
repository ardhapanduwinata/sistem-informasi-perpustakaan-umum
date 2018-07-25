<?php

class m_register extends CI_Model{
    function cek_register($table,$where){
        return $this->db->get_where($table,$where);
    }
}
