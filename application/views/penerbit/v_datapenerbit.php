<body><br>
    <div id="page-wrapper">
      <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">penerbit</h1>
                </div>
                <!--End Page Header -->
            </div>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/penerbit/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id penerbit</th>
                    <th>Nama</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_penerbit;?></td>
                        <td><?php echo $row->nama_penerbit;?></td>
                        <td> 
                    <a  class="btn btn-warning" href="<?php echo base_url('index.php/penerbit/edit/'.$row->id_penerbit);?>">edit</a>
<<<<<<< HEAD
                    <a  class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!'); href="<?php echo base_url('index.php/penerbit/hapusproses/'.$row->id_penerbit);?>">delete</a>
=======
                    <a  class="btn btn-danger" href="<?php echo base_url('index.php/penerbit/hapus/'.$row->id_penerbit);?>">delete</a>
>>>>>>> c70f93819fdad8c0c188f376e52219bb606d0484
                    <a  class="btn btn-info" href="<?php echo base_url('index.php/penerbit/detail/'.$row->id_penerbit);?>">detail</a>
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