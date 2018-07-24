<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_pinjam');
        if($this->session->userdata('status') != "admin"){
            redirect(site_url("house/login"));
        }
    }

    public function index()
    {   
        $this->load->model('m_pinjam');
        $data['menu']       ='menu.php';
        $data['content']    ='pinjam/v_datapinjam.php';
        $data['data'] = $this->m_pinjam->getdatapinjam(); 
        $this->load->view('v_home.php',$data);
    }
    public function datapengembalian()
    {   
        $this->load->model('m_pinjam');
        $data['menu']       ='menu.php';
        $data['content']    ='pinjam/v_datapinjam.php';
        $data['data'] = $this->m_pinjam->getdatapengembalian(); 
        $this->load->view('v_home.php',$data);
    }
    public function terima()
    {   
        $this->db->trans_begin();
        $data = array(
            'status' => $this->uri->segment(4),
            'tanggal_peminjaman' => date('Y-m-d'),
            'id_admin'  => $this->session->userdata('id_admin'),
        );
        $where = array(
            'id_peminjaman' => $this->uri->segment(3),
        );
        $this->db->set($data)->where($where)->update('peminjaman');
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg', 'Gagal Meminjamkan Buku!');
        }else{
            $this->db->trans_commit();
            $this->session->set_flashdata('msg', 'Sukses Meminjamkan Buku!');
            redirect(site_url().'/Pinjam');
        }
    }

    public function pengembalian()
    {   
        $this->db->trans_begin();
        $data = array(
            'status' => $this->uri->segment(4),
            'tanggal_pengembalian' => date('Y-m-d'),
            'id_admin'  => $this->session->userdata('id_admin'),
        );
        $where = array(
            'id_peminjaman' => $this->uri->segment(3),
        );
        $this->db->set($data)->where($where)->update('peminjaman');
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg', 'Gagal pengembalian Buku!');
        }else{
            $this->db->trans_commit();
            $this->session->set_flashdata('msg', 'Sukses pengembalian Buku!');
            redirect(site_url().'/Pinjam/datapengembalian');
        }
    }
    public function tolak()
    {   
        $this->db->trans_begin();
       
        $where = array(
            'id_peminjaman' => $this->uri->segment(3),
        );
        $this->db->where($where)->delete('peminjaman');
        if ($this->db->trans_status() === FALSE){
            $this->db->trans_rollback();
            $this->session->set_flashdata('msg', 'Gagal Meminjamkan Buku!');
        }else{
            $this->db->trans_commit();
            $this->session->set_flashdata('msg', 'Sukses Meminjamkan Buku!');
            redirect(site_url().'/Pinjam');
        }
    }
    public function tambah()
    {   
        $data['menu']       ='menu.php';
        $data['content']    ='pinjam/v_pinjambuku.php';
        $data['buku']=$this->m_buku->getpeminjaman();
        $this->load->view('v_home.php',$data);
    }

    public function simpan()
    {
        $id_peminjaman=$this->input->post('id_peminjaman');
        $tanggal_peminjaman=$this->input->post('tanggal_peminjaman');
        $tanggal_pengembalian=$this->input->post('tanggal_pengembalian');
        $nama_buku=$this->input->post('nama_buku');
        $pengarang=$this->input->post('pengarang');
        $nama_anggota=$this->input->post('nama_anggota');
        $nama_admin=$this->input->post('nama_admin');
        $status=$this->input->post('status');
        $cover_buku=$_FILES['cover_buku']['name'];

        if($foto='')
        {

        }
        else
        {
            $this->load->library('upload');
            $config['upload_path']          = './assets/path/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('cover_buku'))
            {
                $error=array('error'=>$this->upload->display_errors());
                print_r($error); die ();
            }
            else
            {
                $foto=$this->upload->data('file_name');
            }
        }
            $info=array(
                'id_peminjaman'=>$id_peminjaman,
                'tanggal_peminjaman'=>$tanggal_peminjaman,
                'tanggal_pengembalian'=>$tanggal_pengembalian,
                'id_anggota'=>$nama_anggota,
                'id_buku'=>$nama_buku,
                'id_admin'=>$nama_buku,
                'cover_buku'=>$cover_buku
            );
            $this->m_pinjam->getinsert($info);
            redirect('pinjam');
    }

    public function edit($id)
    {   
        $data['menu']       ='menu.php';
        $data['content']    ='buku/v_editpinjam.php';
        $data['data']       =$this->m_pinjam->cekid($id)->row_array();
        $data['buku']       =$this->m_pinjam->getpinjam();

        $this->load->view('v_home.php',$data);

    }

    public function editproses()
    { 
        $id_peminjaman=$this->input->post('id_peminjaman');
        $tanggal_peminjaman=$this->input->post('tanggal_peminjaman');
        $tanggal_pengembalian=$this->input->post('tanggal_pengembalian');
        $nama_buku=$this->input->post('nama_buku');
        $pengarang=$this->input->post('pengarang');
        $nama_anggota=$this->input->post('nama_anggota');
        $nama_admin=$this->input->post('nama_admin');
        $status=$this->input->post('status');
        $cover_buku=$_FILES['cover_buku']['name'];

        if($foto='')
        {

        }
        else
        {
            $this->load->library('upload');
            $config['upload_path']          = './assets/path/';
            $config['allowed_types']        = 'gif|jpg|png';
            $this->upload->initialize($config);
            if(! $this->upload->do_upload('cover_buku'))
            {
                $error=array('error'=>$this->upload->display_errors());
                print_r($error); die ();
            }
            else
            {
                unlink('./assets/path/'.$this->input->post('foto_old'));
                $cover_buku=$this->upload->data('file_name');
            }
        }
                                        
            $info=array(
                'id_peminjaman'=>$id_peminjaman,
                'tanggal_peminjaman'=>$tanggal_peminjaman,
                'tanggal_pengembalian'=>$tanggal_pengembalian,
                'id_anggota'=>$nama_anggota,
                'id_buku'=>$nama_buku,
                'id_admin'=>$nama_buku,
                'cover_buku'=>$cover_buku
            );
            $this->m_pinjam->getupdate($info, $id);
            redirect('pinjam');
    
    }

public function Hapus($id)
    {   
        $data['menu']       ='menu.php';
        $data['content']    ='pinjam/v_hapuspinjam.php';
        $data['data']       =$this->m_pinjam->cekid($id)->row_array();
        $this->load->view('v_home.php',$data);

    }
    public function hapusproses($id)
    {
            $this->m_pinjam->hapus($id);
            redirect('pinjam');
    
    }
    public function viewBook($id){
        
     $data['records'] = $this->m_pinjam->getOne($id); 
         $this->load->view('pinjam/pinjam_view',$data); 
   }
 }