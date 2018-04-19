<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/kategori/hapusproses/'.$data['id_kategori']);?>" onsubmit="return cekform();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id kategori</label>
                                            <input class="form-control" type="text" name="id_kategori" id="id_kategori" value="<?php echo $data['id_kategori'];?>" placeholder="Id kategori" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama kategori</label>
                                            <input class="form-control" type="text" name="nama_kategori" id="nama_kategori" placeholder="Nama kategori" value="<?php echo $data['nama_kategori'];?>" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>lokasi</label>
                                            <input class="form-control" type="text" name="lokasi" id="lokasi" placeholder="lokasi" value="<?php echo $data['lokasi'];?>" class="span3" required disabled>
                                        </div>
                                            <br>
                                            <button type="submit" class="btn btn-danger btn-sm">detele</button>
                                            <a href="<?php echo base_url('index.php/kategori');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        