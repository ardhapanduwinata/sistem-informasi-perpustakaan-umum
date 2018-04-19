<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_model {
	private $table="anggota";
	private $primary="id_anggota";

public function __construct()
{
	parent::__construct();
}
public function getdataanggota($key)
 {
 	$k=$this->db->query("select*from anggota where id_anggota ='$key'");
 	return $k;
 }

 public function getinsert($data)
 {
 	$this->db->insert('anggota',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from anggota where id_anggota ='$id'");
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