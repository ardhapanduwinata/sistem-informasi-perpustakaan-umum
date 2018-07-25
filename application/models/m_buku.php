<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_model {
	private $table="buku";
	private $primary="id_buku";

	public function getOne($id)
	{
		$this->db->where('id_buku',$id);
		return $this->db->get('buku')->result_array();
	}

	public function getdatabuku(){
		$k = "SELECT
		buku.id_buku,
		buku.nama_buku,
		buku.pengarang,
		buku.tahun_terbit,
		penerbit.nama_penerbit,
		kategori.nama_kategori,
		kategori.lokasi, 
		buku.cover_buku,
		buku.sinopsis
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
		return $this->db->query(" SELECT * from buku AS a join penerbit AS b on a.id_penerbit = b.id_penerbit join kategori AS c on a.id_kategori = c.id_kategori where id_buku='".$id."'");
	}
	function getupdate($info, $id){
		$this->db->where($this->primary, $id);
		$this->db->update($this->table, $info);
	}
	public function hapus($id){
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
	}
	public function get_all_artikel($limit = FALSE, $offset = FALSE)
    {
        if($limit){
            $this->db->limit($limit,$offset);
        }
        $query = $this->db->get('buku');
        return $query->result_array();
    }
    public function get_total()
    {
        return $this->db->count_all('buku');
    }
}
