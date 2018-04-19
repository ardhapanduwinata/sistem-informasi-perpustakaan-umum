<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/penerbit/hapusproses/'.$data['id_penerbit']);?>" onsubmit="return cekform();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id penerbit</label>
                                            <input class="form-control" type="text" name="id_penerbit" id="id_penerbit" value="<?php echo $data['id_penerbit'];?>" placeholder="Id penerbit" class="span3" required disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama penerbit</label>
                                            <input class="form-control" type="text" name="nama_penerbit" id="nama_penerbit" placeholder="Nama penerbit" value="<?php echo $data['nama_penerbit'];?>" class="span3" required disabled>
                                        </div>
                                            <br>
                                            <button type="submit" class="btn btn-danger btn-sm">detele</button>
                                            <a href="<?php echo base_url('index.php/penerbit');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        