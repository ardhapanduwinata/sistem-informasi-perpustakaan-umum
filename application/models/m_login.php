<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model {

    public function getData($username, $password)
    {
        //mengasmbil data sesuai username dan password pada tabel user
        $result = $this->db->query("SELECT * from anggota where username = '".$username."' AND password = '".$password."'");
        //mengcek apakah ada data dan berjumlah tepat 1
        if($result->num_rows()==1){
            //mengembalikan data user dalam bentuk array
            return $result->result_array();
        }
        //jika data kurang dari 1 (tidak ditemukan)
        elseif($result->num_rows()<1){
            //mengambil data sesuai username dan password pada tabel admin
            $result = $this->db->query("SELECT * from admin where username = '".$username."' AND password = '".$password."'");
            //mengcek data apakah ada atau tidak
            if($result->num_rows()==1){
                //mengembalikan data dalam bentuk array
                return $result->result_array();
            }
            else {
                //jika tidak ada data ditemukan pada tabel user maupun admin, mengembalikan nilai false
                return false;
            }
        }
    }

    //fungsi menentukan level dari user
    public function getLevel($username, $password)
    {
        //mencari data username dan password pada tabel user
        $result = $this->db->query("SELECT * from anggota where username = '".$username."' AND password = '".$password."'");

        if($result->num_rows()==1){
            //mengembalikan nilai level = 1
            return 1;
        }
        elseif($result->num_rows()<1){
            $result = $this->db->query("SELECT * from admin where username = '".$username."' AND password = '".$password."'");

            if($result->num_rows()==1){
                //mengembalikan nilai level = 2
                return 2;
            }
            else {
                //jika tidak ditemukan data username dan password pada tabel user maupun admin, mengembalikan nilai false
                return false;
            }
        }
    }
}