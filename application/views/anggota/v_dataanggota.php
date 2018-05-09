<body><br>
    <div id="page-wrapper">
      <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">anggota</h1>
                </div>
                <!--End Page Header -->
            </div>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/anggota/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id anggota</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Hp</th>
                    <th>@mail</th>
                    <th>Foto</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                      $no = 1;
                      foreach ($data->result() as $row) {
                    ?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_anggota;?></td>
                        <td><?php echo $row->nama_anggota;?></td>
                        <td><?php echo $row->alamat_anggota;?></td>
                        <td><?php echo $row->notelp_anggota;?></td>
                        <td><?php echo $row->email_anggota;?></td>
                        <td><?php echo $row->foto;?></td>
                        <td> 
                        <a  class="btn btn-warning" href="<?php echo base_url('index.php/anggota/edit/'.$row->id_anggota);?>">edit</a>
                        <a  class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!'); href="<?php echo base_url('index.php/anggota/hapusproses/'.$row->id_anggota);?>">delete</a>
                        <a  class="btn btn-info" href="<?php echo base_url('index.php/anggota/detail/'.$row->id_anggota);?>">detail</a>
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