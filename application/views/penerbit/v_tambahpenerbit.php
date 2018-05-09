<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
             <form class="form-horizontal" method="POST" action="<?php echo base_url('index.php/penerbit/simpan');?>" onsubmit="return cekform();">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Id penerbit</label>
                                            <input class="form-control" type="text" name="id_penerbit" id="id_penerbit" placeholder="Id penerbit" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama penerbit</label>
                                            <input class="form-control" type="text" name="nama_penerbit" id="nama_penerbit" placeholder="Nama penerbit" class="span3" required>
                                        </div>
                                            <br>
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <a href="<?php echo base_url('index.php/penerbit');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        