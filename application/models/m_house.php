<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_house extends CI_model {
    public function __construct()
    {
        parent::__construct();
    }
    public function getBuku()
    {
        $array=$this->db->query("select * from buku");
        return $array->result_array();
    }
    public function getDataPinjam($id_anggota)
    {
        $array=$this->db->query("SELECT b.*,a.id_peminjaman
			FROM peminjaman AS a
			JOIN buku AS b ON a.buku_id_buku = b.id_buku
			WHERE a.id_anggota = $id_anggota
			AND a.status = 'Pinjam'");
        return $array->result_array();
    }
}