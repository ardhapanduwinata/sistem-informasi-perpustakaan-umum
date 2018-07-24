<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pinjam extends CI_model {
	private $table="peminjaman";
	private $primary="id_peminjaman";

	public function getOne($id)
	{
		$this->db->where('id_peminjaman',$id);
		return $this->db->get('peminjaman')->result_array();
	}

	public function getdatapinjam(){
		$k = "SELECT a.status, a.id_peminjaman, a.tanggal_peminjaman, a.tanggal_pengembalian, b.nama_anggota, c.id_buku, c.nama_buku, c.pengarang, d.nama_admin, c.cover_buku FROM peminjaman AS a join anggota AS b on b.id_anggota = a.id_anggota join buku AS c on c.id_buku = a.buku_id_buku join admin AS d on d.id_admin = a.id_admin WHERE a.status = 'Permintaan Peminjaman' ORDER BY a.id_peminjaman Desc";
		return $this->db->query($k);
	}
	public function getdatapengembalian(){
		$k = "SELECT a.status, a.id_peminjaman, a.tanggal_peminjaman, a.tanggal_pengembalian, b.nama_anggota, c.id_buku, c.nama_buku, c.pengarang, d.nama_admin, c.cover_buku FROM peminjaman AS a join anggota AS b on b.id_anggota = a.id_anggota join buku AS c on c.id_buku = a.buku_id_buku join admin AS d on d.id_admin = a.id_admin WHERE a.status != 'Permintaan Peminjaman'  ORDER BY a.id_peminjaman Desc";
		return $this->db->query($k);
	}

	public function getPinjamById($id_peminjaman=""){
		return $this->db->where("id_peminjaman",$id_peminjaman)->get($this->table);
	}
	public function getpeminjaman() {
	$this->db->select('*');
	$this->db->from('peminjaman');
	$query = $this->db->get();		
	return $query->result();
	}

	public function getinsert($data){
		$this->db->insert('peminjaman',$data);
	}

	public function cekid($id){
		return $this->db->query(" SELECT * from peminjaman AS a 
			join buku AS b on a.id_buku = b.id_buku 
			join anggota AS c on a.id_anggota = c.id_anggota
			join admin as d a.id_admin = d.id_admin
			where id_peminjaman='".$id."'");
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
