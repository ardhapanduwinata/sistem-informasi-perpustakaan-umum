<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERPUSTAKAAN</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/house/css/one-page-wonder.min.css') ?>" rel="stylesheet">



<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>index.php">PERPUSTAKAAN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if(!$this->session->userdata('id_anggota')){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>index.php/register"><span class="glyphicon glyphicon-user-plus"></span> Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>index.php/login"><span class="glyphicon glyphicon-sign-in"></span> Log In</a>
                    </li>
                    <?php }else{ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="glyphicon glyphicon-blind"></span> <?=$this->session->userdata('nama_anggota')?></a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Member/history">History Peminajaman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Member/pengembalian">Pengembalian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Member/edit_profile">Edit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/login/logout"><span class="glyphicon glyphicon-sign-out"></span> LogOut</a>
                        </li>
                    <?php }?>
            </ul>
        </div>
    </div>
</nav>