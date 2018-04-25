<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('house.php/anggota/hapusproses/'.$data['id_anggota']);?>" onsubmit="return cekform();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id anggota</label>
                                            <input class="form-control" type="text" name="id_anggota" id="id_anggota" value="<?php echo $data['id_anggota'];?>" placeholder="Id anggota" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama anggota</label>
                                            <input class="form-control" type="text" name="nama_anggota" id="nama_anggota" placeholder="Nama anggota" value="<?php echo $data['nama_anggota'];?>" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat anggota</label>
                                            <input class="form-control" type="text" name="alamat_anggota" id="alamat_anggota" placeholder="Alamat anggota" value="<?php echo $data['alamat_anggota'];?>" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Telp anggota</label>
                                            <input class="form-control" type="text" name="notelp_anggota" id="notlp_anggota" placeholder="No Telp anggota" value="<?php echo $data['notelp_anggota'];?>" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>@mail</label>
                                            <input class="form-control" type="email" name="email_anggota" id="email_anggota" placeholder="@mail" value="<?php echo $data['email_anggota'];?>" class="span3" required disabled>
                                        </div>
                                        <div>
                                            <label>foto</label>
                                            <input class="form-control" type="text" name="foto" id="foto" value="<?php echo $data['foto'];?>" placeholder="foto" class="span3" required disabled>
                                            <br>
                                            <button type="submit" class="btn btn-danger btn-sm">detele</button>
                                            <a href="<?php echo base_url('house.php/anggota');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        