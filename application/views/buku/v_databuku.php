<body><br>
    <div id="page-wrapper">
      <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Buku</h1>
                </div>
                <!--End Page Header -->
            </div>
<body>
  <div class="panel-body">
    <a href="<?php echo base_url('index.php/buku/tambah');?>" class= "btn btn-primary btn-small">Tambah Data</a>
     <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover example" >
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Buku</th>
                    <th>Nama Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Nama Penerbit</th>
                    <th>Nama Kategori</th>
                    <th>sinopsis</th>
                    <th>Lokasi</th>
                    <th>Cover Buku</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
						$no = 1;
						foreach ($data->result() as $row) {
						?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_buku;?></td>
                        <td><?php echo $row->nama_buku;?></td>
                        <td><?php echo $row->pengarang;?></td>
                        <td><?php echo $row->tahun_terbit;?></td>
                        <td><?php echo $row->nama_penerbit?></td>
                        <td><?php echo $row->nama_kategori;?></td>
                        <td><?php echo $row->sinopsis;?></td>
                        <td><?php echo $row->lokasi;?></td>
                        <td><img src="<?php echo base_url().'assets/path/'. $row->cover_buku;?>" width="50px" height="50px"></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/buku/edit/'.$row->id_buku);?>">edit</a>
                            <a class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!'); " href="<?php echo base_url('index.php/buku/hapusproses/'.$row->id_buku);?>">delete</a>
                		</td>
                   </tr>
                <?php }?>
            </tbody>
            </table>
        </div>
    </div>
</body>   

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.example').DataTable();
} );
</script>          