<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('house.php/kategori/simpan');?>" onsubmit="return cekform();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id kategori</label>
                                            <input class="form-control" type="text" name="id_kategori" id="id_kategori" placeholder="Id kategori" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama kategori</label>
                                            <input class="form-control" type="text" name="nama_kategori" id="nama_kategori" placeholder="Nama kategori" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input class="form-control" type="text" name="lokasi" id="lokasi" placeholder="lokasi" class="span3" required>
                                        </div>
                                            <br>
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <a href="<?php echo base_url('house.php/kategori');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        