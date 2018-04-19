<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_model {
	private $table="kategori";
	private $primary="id_kategori";

public function __construct()
{
	parent::__construct();
}
public function getdatakategori($key)
 {
 	$k=$this->db->query("select*from kategori where id_kategori ='$key'");
 	return $k;
 }

 public function getinsert($data)
 {
 	$this->db->insert('kategori',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from kategori where id_kategori ='$id'");
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