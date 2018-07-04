
<?php $this->load->view('header&footer/header') ?>

<title>One Page Wonder - Start Bootstrap Template</title>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>index.php/login/kelogin">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead text-center text-white">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">One Page Wonder</h1>
            <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
            <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
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
                        <img style="width: 250px;" src="<?= base_url('assets/img/') . $key['cover_buku'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4"><?= $key['nama_buku'] ?></h2>
                        <p><?= $key['sinopsis'] ?></p>
                        <button class="btn btn-outline-primary" type="button">View More</button>
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
                        <img style="width: 250px;" src="<?= base_url('assets/img/') . $key['cover_buku'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4"><?= $key['nama_buku'] ?></h2>
                        <p><?= $key['sinopsis'] ?></p>
                        <button class="btn btn-outline-primary" type="button">View More</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }
     } ?>
<?php $this->load->view('header&footer/footer') ?>