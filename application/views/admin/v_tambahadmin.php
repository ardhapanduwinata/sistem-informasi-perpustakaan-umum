<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <?php echo form_open_multipart('Admin/simpan');?>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Id Admin</label>
                                            <input class="form-control" type="text" name="id_admin" id="id_admin" placeholder="Id Admin" class="span3" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input class="form-control" type="text" name="nama_admin" id="nama_admin" placeholder="Nama Admin" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Admin</label>
                                            <input class="form-control" type="text" name="alamat_admin" id="alamat_admin" placeholder="Alamat Admin" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telp Admin</label>
                                            <input class="form-control" type="text" name="notelp_admin" id="notelp_admin" placeholder="No Telp Admin" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>@mail</label>
                                            <input class="form-control" type="email" name="email_admin" id="email_admin" placeholder="@mail" class="span3" required>
                                        </div>
                                        <div>
                                            <label>foto</label>
<<<<<<< HEAD
                                            <input class="form-control" type="file" name="foto" id="foto" class="span3" required>
                                        <div class="form-group">
                                            <label>username</label>
                                            <input class="form-control" type="text" name="username" id="username" placeholder="username" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="password" class="span3" required>
                                        </div>
=======
                                            <input class="form-control" type="file" name="cover_admin" id="cover_admin" class="span3" required>
>>>>>>> 92b9a93b50ed68c553c0eed2ef99b37c5f9b2f21
                                            <br>
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <a href="<?php echo base_url('index.php/admin');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>
                                        </form>