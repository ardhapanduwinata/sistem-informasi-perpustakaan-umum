<?php $this->load->view('header.php');?>

<title>One Page Wonder - Start Bootstrap Template</title>



<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">  Perpustakaan Online </h1>
            <h2 class="masthead-subheading mb-0">Malang Raya </h2>
           
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>
<?php foreach ($array_buku as $key) {
    if (($key['id_buku'])%2 == 0) { ?>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img style="width: 250px;" src="<?= base_url('assets/path/') . $key['cover_buku'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4"><?= $key['nama_buku'] ?></h2>
                        <p><?= $key['sinopsis'] ?></p>
                        <?php if($this->uri->segment(2)=='pengembalian'){?>
                        <a class="btn btn-outline-primary"  href="<?php echo site_url('house/ViewMorePengembalian/'.$key['id_buku'].'/'.$key['id_peminjaman']);?>">View More</a>
                        <?php }else{?>
                        <a class="btn btn-outline-primary"  href="<?php echo site_url('house/ViewMore/'.$key['id_buku']);?>">View More</a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php } else { ?>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img style="width: 250px;" src="<?= base_url('assets/path/') . $key['cover_buku'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4"><?= $key['nama_buku'] ?></h2>
                        <p><?= $key['sinopsis'] ?></p>
                        <p><?= $key['sinopsis'] ?></p>
                        <?php if($this->uri->segment(2)=='pengembalian'){?>
                        <a class="btn btn-outline-primary"  href="<?php echo site_url('house/ViewMorePengembalian/'.$key['id_buku'].'/'.$key['id_peminjaman']);?>">View More</a>
                        <?php }else{?>
                        <a class="btn btn-outline-primary"  href="<?php echo site_url('house/ViewMore/'.$key['id_buku']);?>">View More</a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }
     } ?>
     <?php $this->load->view('footer.php');?>
