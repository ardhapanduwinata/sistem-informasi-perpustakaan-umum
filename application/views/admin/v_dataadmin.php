<body><br>
    <div id="page-wrapper">
      <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Admin</h1>
                </div>
                <!--End Page Header -->
            </div>
    <div class="panel-body">
    <a href="<?php echo base_url('index.php/admin/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
    <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Admin</th>
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
                        <td><?php echo $row->id_admin;?></td>
                        <td><?php echo $row->nama_admin;?></td>
                        <td><?php echo $row->alamat_admin;?></td>
                        <td><?php echo $row->notelp_admin;?></td>
                        <td><?php echo $row->email_admin;?></td>
                        <td><img src="<?php echo base_url() ?>assets/upload/admin/<?php echo $row->foto;?>" alt="" width="100px" height="80px"></td>
                        <td> 
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/admin/edit/'.$row->id_admin);?>">edit</a>
                            <a  class="btn btn-danger" href="<?php echo base_url('index.php/admin/hapus/'.$row->id_admin);?>" >delete</a>
                            <a  class="btn btn-info" href="<?php echo base_url('index.php/admin/detail/'.$row->id_admin);?>">detail</a>
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