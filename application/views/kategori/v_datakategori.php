<body><br>
    <div id="page-wrapper">
      <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">kategori</h1>
                </div>
                <!--End Page Header -->
            </div>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/kategori/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id kategori</th>
                    <th>Nama</th>
                    <th>lokasi</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_kategori;?></td>
                        <td><?php echo $row->nama_kategori;?></td>
                        <td><?php echo $row->lokasi;?></td>
                        <td> 
                    <a  class="btn btn-warning" href="<?php echo base_url('index.php/kategori/edit/'.$row->id_kategori);?>">edit</a>
                    <a  class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!'); href="<?php echo base_url('index.php/kategori/hapusproses/'.$row->id_kategori);?>">delete</a>
                    <a  class="btn btn-info" href="<?php echo base_url('index.php/kategori/detail/'.$row->id_kategori);?>">detail</a>
                   </tr>
                </td>
            </div>
        <?php }?>
    </tbody>
    </tr>
    </tbody>
    </tr>
    </thead>
    </table>
    </div>
    </div>
    </body>
    </html>
</table> 