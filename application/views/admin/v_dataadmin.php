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
            <table class="table table-striped table-bordered table-hover example" >
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
<<<<<<< HEAD
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->id_admin;?></td>
                    <td><?php echo $row->nama_admin;?></td>
                    <td><?php echo $row->alamat_admin;?></td>
                    <td><?php echo $row->notelp_admin;?></td>
                    <td><?php echo $row->email_admin;?></td>
                    <td><?php echo $row->foto;?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url('index.php/admin/edit/'.$row->id_admin);?>">edit</a>
                        <a  class="btn btn-danger" href="<?php echo base_url('index.php/admin/hapus/'.$row->id_admin);?>">delete</a>
                        <a  class="btn btn-info" href="<?php echo base_url('index.php/admin/detail/'.$row->id_admin);?>">detail</a>
                </tr>
=======
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_admin;?></td>
                        <td><?php echo $row->nama_admin;?></td>
                        <td><?php echo $row->alamat_admin;?></td>
                        <td><?php echo $row->notelp_admin;?></td>
                        <td><?php echo $row->email_admin;?></td>
<<<<<<< HEAD
                        <td><img src="<?php echo base_url().'assets/path/'. $row->foto;?>" width="50px" height="50px"></td>
                        <td> 
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/admin/edit/'.$row->id_admin);?>">edit</a>
                            <a  class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!'); href="<?php echo base_url('index.php/admin/hapusproses/'.$row->id_admin);?>" >delete</a>
=======
                        <td><img src="<?php echo base_url() ?>assets/upload/admin/<?php echo $row->foto;?>" alt="" width="100px" height="80px"></td>
                        <td> 
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/admin/edit/'.$row->id_admin);?>">edit</a>
                            <a  class="btn btn-danger" href="<?php echo base_url('index.php/admin/hapus/'.$row->id_admin);?>" >delete</a>
>>>>>>> c70f93819fdad8c0c188f376e52219bb606d0484
                            <a  class="btn btn-info" href="<?php echo base_url('index.php/admin/detail/'.$row->id_admin);?>">detail</a>
                   </tr>
>>>>>>> 67549ee5a5aaa7642f84f07ab7a8979dc2799a68
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
<<<<<<< HEAD
    </body>
    </html>
</table>

<script src="<?php echo base_url("assets/plugins/jquery-1.10.2.js");?>"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.example').DataTable();
} );
</script>
=======
</div>
</body>
</html>
</table> 
>>>>>>> c70f93819fdad8c0c188f376e52219bb606d0484
