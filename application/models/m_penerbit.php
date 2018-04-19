<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penerbit extends CI_model {
	private $table="penerbit";
	private $primary="id_penerbit";

public function __construct()
{
	parent::__construct();
}
public function getdatapenerbit($key)
 {
 	$k=$this->db->query("select*from penerbit where id_penerbit ='$key'");
 	return $k;
 }

 public function getinsert($data)
 {
 	$this->db->insert('penerbit',$data);
 }

public function cekid($id)
 {
 	$k=$this->db->query("select*from penerbit where id_penerbit ='$id'");
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