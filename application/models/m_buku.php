<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_model {
	private $table="buku";
	private $primary="id_buku";

	public function getdatabuku(){
		$k = "SELECT
		buku.id_buku,
		buku.nama_buku,
		buku.pengarang,
		buku.tahun_terbit,
		penerbit.nama_penerbit,
		kategori.nama_kategori,
		kategori.lokasi
		FROM
		buku 
		join penerbit on penerbit.id_penerbit = buku.id_penerbit
		join kategori on kategori.id_kategori = buku.id_kategori";
		return $this->db->query($k);
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
							  join kategori on buku.id_kategori = kategori.nama_kategori
							  join penerbit on buku.id_penerbit = penerbit.nama_penerbit");
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
