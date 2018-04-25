<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_model {
	private $table="buku";
	private $primary="id_buku";

	public function getdatabuku(){
		return $this->db->get("buku");
	}

	public function getBukuById($id_buku=""){
		return $this->db->where("id_buku",$id_buku)->get($this->table);
	}
	public function getbuku() {
	$this->db->select('*');
	$this->db->from('buku');
	$query = $this->db->get();		
	return $query->result();
	}

	public function getinsert($data){
		$this->db->insert('buku',$data);
	}

	public function cekid($id){
		$id=$this->db->query("select * from buku 
							  join kategori on buku.id_kategori = kategori.id_kategori
							  join penerbit on buku.id_penerbit = penerbit.id_penerbit");
		return $id;
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
