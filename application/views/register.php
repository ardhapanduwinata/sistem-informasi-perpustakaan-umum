<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perpustakaan</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/bootstrap.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/pace/pace-theme-big-counter.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/main-style.css');?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url('assets/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet" />
   </head>
<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title"  style="padding-left: 400px; padding-right: 400px"></h3>
                        <center>
                        <LEGEND>REGRISTRASI</LEGEND>
                        <?php echo form_open_multipart('');
        echo validation_errors('<div class = "alert alert-danger">', '</div>');
        ?>
        <label>Nama</label>
        <input type="text" class="form-control" name="nama_anggota" value="<?php echo set_value('nama_anggota');?>" placeholder="Nama" autofocus><br>
        <label>alamat</label>
        <input type="text" class="form-control" name="alamat_anggota" value="<?php echo set_value('alamat_anggota');?>" placeholder="alamat"><br>
         <label>No Telp</label>
        <input type="text" class="form-control" name="notelp_anggota" value="<?php echo set_value('notelp_anggota');?>" placeholder="No Telp"><br>
        <label>email</label>
        <input type="text" class="form-control" name="email_anggota" value="<?php echo set_value('email_anggota');?>" placeholder="email"><br>
        <label>Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" placeholder="Username"><br>
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password">
        <br>
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
        <p><?php echo (isset($error) ? $error : "") ?></p><br>

        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                    <div class="panel-body">
                        <form role="form">

        
    </center>
</div>