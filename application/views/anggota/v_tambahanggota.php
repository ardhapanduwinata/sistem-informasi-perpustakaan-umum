<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/anggota/simpan');?>" onsubmit="return cekform();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id anggota</label>
                                            <input class="form-control" type="text" name="id_anggota" id="id_anggota" placeholder="Id anggota" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama anggota</label>
                                            <input class="form-control" type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama anggota" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat anggota</label>
                                            <input class="form-control" type="text" name="alamat_anggota" id="alamat_anggota" placeholder="Alamat anggota" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telp anggota</label>
                                            <input class="form-control" type="text" name="notelp_anggota" id="notelp_anggota" placeholder="No Telp anggota" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>@mail</label>
                                            <input class="form-control" type="email" name="email_anggota" id="email_anggota" placeholder="@mail" class="span3" required>
                                        </div>
                                        <div>
                                            <label>foto</label>
                                            <input class="form-control" type="text" name="foto" id="foto" placeholder="foto" class="span3" required>
                                            <br>
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <a href="<?php echo base_url('index.php/anggota');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        