<nav class="navbar navbar-default" style="background: linear-gradient(to bottom right, #AADDBB, #FFFF88, #CCCCEE);">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#"><font color="black">Sistem Informasi Perpustakaan</font></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo base_url('home') ?>"><font color="black">Home</font><span class="sr-only">(current)</span></a></li>
		        <!-- <li><a href="<?php //echo base_url('Home/profile') ?>">Profil</a></li> -->
		        <li><a href="<?php echo base_url('Home/profile') ?>"><font color="black">Kontak Kami</font></a></li>
		        <li><a href="<?php echo base_url('Home/profile') ?>"><font color="black">Tentang Kami</font></a></li>
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo base_url('Home/kelogin') ?>"><font color="black">Login</font></a></li>
		        <!-- <li><a href="<?php //echo base_url('Home/transaksi') ?>">Transaksi</a></li> -->
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<?php
	if ($this->session->flashdata('mustLogin')) {
		echo '<p class="alert alert-danger">'.$this->session->flashdata('mustLogin').'</p>';
	}

	if ($this->session->flashdata('invalidLogin')) {
		echo '<p class="alert alert-danger">'.$this->session->flashdata('invalidLogin').'</p>';
	}

	if ($this->session->flashdata('wrongUser')) {
		echo '<p class="alert alert-danger">'.$this->session->flashdata('wrongUser').'</p>';
	}	

?>