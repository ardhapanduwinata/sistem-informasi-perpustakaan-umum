                    <?php $this->load->view('header.php');?>

<title>Perpustakaan Online</title>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="panel-heading">
                        <h3 class="panel-title"  style="padding-left: 400px; padding-right: 400px"></h3>
                        <center>
                        <LEGEND>EDIT PROFILE</LEGEND>
                        <?php echo form_open_multipart('');
        echo validation_errors('<div class = "alert alert-danger">', '</div>');
        ?>
        <label>Nama</label>
        <input type="text" class="form-control" name="nama_anggota" value="<?php echo $rows['nama_anggota'] ?>" placeholder="Nama" autofocus><br>
        <label>alamat</label>
        <input type="text" class="form-control" name="alamat_anggota" value="<?php echo $rows['alamat_anggota'] ?>" placeholder="alamat"><br>
         <label>No Telp</label>
        <input type="text" class="form-control" name="notelp_anggota" value="<?php echo $rows['notelp_anggota'] ?>" placeholder="No Telp"><br>
        <label>email</label>
        <input type="text" class="form-control" name="email_anggota" value="<?php echo $rows['email_anggota'] ?>" placeholder="email"><br>
        <label>Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $rows['username'] ?>" placeholder="Username"><br>
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <br>
        <img src="<?php echo base_url('assets/path/'.$rows['foto']) ?>" alt="" style="width: 15%">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
        <p><?php echo (isset($error) ? $error : "") ?></p><br>

        <button type="submit" class="btn btn-primary">Edit Profile</button>
                    </div>
        </div>
    </div>
</div>
     <?php $this->load->view('footer.php');?>
