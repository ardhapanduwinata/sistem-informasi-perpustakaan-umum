<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <?php echo form_open_multipart('Admin/tambah');?>
                        <?php echo validation_errors(); ?>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Id Admin</label>
                                            <input class="form-control" type="text" name="id_admin" id="id_admin" placeholder="Id Admin" class="span3" >
                                            <?php echo form_error('id_admin') ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input class="form-control" type="text" name="nama_admin" id="nama_admin" placeholder="Nama Admin" class="span3">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Admin</label>
                                            <input class="form-control" type="text" name="alamat_admin" id="alamat_admin" placeholder="Alamat Admin" class="span3">
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telp Admin</label>
                                            <input class="form-control" type="text" name="notelp_admin" id="notelp_admin" placeholder="No Telp Admin" class="span3">
                                        </div>
                                        <div class="form-group">
                                            <label>@mail</label>
                                            <input class="form-control" type="email" name="email_admin" id="email_admin" placeholder="@mail" class="span3">
                                        </div>
                                        <div>
                                            <label>foto</label>
                                            <input class="form-control" type="file" name="foto" id="foto" class="span3">
                                            <br>
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <a href="<?php echo base_url('index.php/admin');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        </form>