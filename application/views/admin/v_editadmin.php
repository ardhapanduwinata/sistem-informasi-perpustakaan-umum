<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
              <?php echo form_open_multipart('admin/editproses/'.$data['id_admin']);?>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id Admin</label>
                                            <input class="form-control" type="text" name="id_admin" id="id_admin" value="<?php echo $data['id_admin'];?>" placeholder="Id Admin" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Admin</label>
                                            <input class="form-control" type="text" name="nama_admin" id="nama_admin" placeholder="Nama Admin" value="<?php echo $data['nama_admin'];?>" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Admin</label>
                                            <input class="form-control" type="text" name="alamat_admin" id="alamat_admin" placeholder="Alamat Admin" value="<?php echo $data['alamat_admin'];?>" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telp Admin</label>
                                            <input class="form-control" type="text" name="notelp_admin" id="notlp_admin" placeholder="No Telp Admin" value="<?php echo $data['notelp_admin'];?>" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>@mail</label>
                                            <input class="form-control" type="email" name="email_admin" id="email_admin" placeholder="@mail" value="<?php echo $data['email_admin'];?>" class="span3" required>
                                            <input class="form-control" type="hidden" name="foto_old"  value="<?php echo $data['foto'];?>">
                                        </div>
                                        <div>
                                            <label>foto</label>
                                            <input class="form-control" type="file" name="foto" id="foto"  class="span3"  required>
                                            <br>
                                        <div class="form-group">
                                            <label>username</label>
                                            <input class="form-control" type="text" name="username" id="username" placeholder="username" value="<?php echo $data['username'];?>" class="span3" required>
                                            <input class="form-control" type="hidden" name="foto_old"  value="<?php echo $data['username'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" type="password" name="password" id="password" placeholder="password" value="<?php echo $data['password'];?>" class="span3" required>
                                            <input class="form-control" type="hidden" name="foto_old"  value="<?php echo $data['password'];?>">
                                        </div>                  
                                            <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                            <a href="<?php echo base_url('index.php/admin');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>