<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_model {
	private $table="admin";
	private $primary="id_admin";

public function __construct()
{
	parent::__construct();
}
public function getdataadmin($key)
 {
 	$k=$this->db->query("select*from admin where id_admin ='$key'");
 	return $k;
 }

 public function getinsert($data)
 {
 	$this->db->insert('admin',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from admin where id_admin ='$id'");
 	return $k;
 	
 }
 function getupdate($info, $id){
        $this->db->where($this->primary, $id);
		$this->db->update($this->table, $info);
    }
public function hapus($id){
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
    }
}