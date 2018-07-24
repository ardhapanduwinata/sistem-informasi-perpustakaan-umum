<?php $this->load->view('header.php');?>
<main role="main">
<div class="container container-fluid">
<div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><br><?php echo $rows['nama_buku'] ?></h1>
       </div>
       <?php if($msg = $this->session->flashdata('msg')){?>
        <div class="col-md-12 text-center">
        <div class="alert alert-info">
          <strong>Info!</strong> <?=$msg?>
        </div>
        </div>
       <?php }?>
       
        <div class="row">
          <div class="col-md-12">
            <h5 class="text-center"> Pengarang : <?php echo  $rows['pengarang']  ?></h5>
          </div>
          <div class="col-md-2"> </div>
          <div class="col-md-8 text-center"> 
             <img src="<?php echo  base_url() ?>assets/path/<?php echo $rows['cover_buku']  ?>" alt=" " class="img-fluid" width="50%">
          </div>
        <div class="col-md-2"> </div>
           <div class="col-8">
          <p><center><?php echo $rows['sinopsis'] ?></center></p>
        </div>
        <div class="col-md-12 text-center">
          <?php if($this->session->userdata('id_anggota')){ ?>
          <a href="<?=site_url('requestPengembalian/'.$rows['id_buku'].'/'.$this->uri->segment(4))?>" class="btn btn-info">Kembalikan Buku</a>
          <?php }else{ ?>
          <a href="<?=site_url('house/login')?>" class="btn btn-info">Pinjam Buku</a>
          <?php }?>
        </div>
      
</div>
</div>
</div>
    </main>


