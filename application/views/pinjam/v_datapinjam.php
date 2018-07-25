<body><br>
    <div id="page-wrapper">
      <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Transaksi</h1>
                </div>
                <!--End Page Header -->
            </div>
<body>
  <div class="panel-body">
     <p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover example" >
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Peminjaman</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda</th>
                    <th>Nama Buku</th>
                    <th>Nama Pengarang</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Petugas</th>
                    <th>Cover Buku</th>
                    <th>Status</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
						$no = 1;
						foreach ($data->result() as $row) {
						?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_peminjaman;?></td>
                        <td><?php echo $row->tanggal_peminjaman;?></td>
                        <td><?php echo $row->tanggal_pengembalian;?></td>
                        <td>
                            <?php 
                            $date1 = new DateTime($row->tanggal_peminjaman);
                            $date1 = $date1->add(new DateInterval('P7D'));
                            $date2 = new DateTime(date("Y-m-d"));
                            $datediff = $date1->diff($date2);
                            $jml_hari = $datediff->days;
                            echo ($date1 < $date2 ? $jml_hari*2000 : "Belum Didenda");
                            ?>        
                        </td>
                        <td><?php echo $row->nama_buku;?></td>
                        <td><?php echo $row->pengarang;?></td>
                        <td><?php echo $row->nama_anggota;?></td>
                        <td><?php echo $row->nama_admin?></td>
                        <td><img src="<?php echo base_url().'assets/path/'. $row->cover_buku;?>" width="50px" height="50px"></td>
                        <td><?php echo $row->status;?></td>
                        <td>
                            <?php if($row->status=='Permintaan Peminjaman'){ ?>
                            <a class="btn btn-info" href="<?php echo base_url('index.php/pinjam/terima/'.$row->id_peminjaman.'/Pinjam');?>">Setujui</a>
                            <a class="btn btn-danger" onclick="return confirm('Anda Yakin?, Data akan dihapus Permanen!'); " href="<?php echo base_url('index.php/pinjam/tolak/'.$row->id_peminjaman);?>">Tolak</a>
                            <?php }elseif($row->status=='Permintaan Pengembalian'){ ?>

                            <a class="btn btn-success" href="<?php echo base_url('index.php/pinjam/pengembalian/'.$row->id_peminjaman.'/Dikembalikan');?>">Pengembalian</a>
                            <?php } ?>
                        </td>
                   </tr>
                <?php }?>
            </tbody>
            </table>
        </div>
    </div>
</body>   
<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.example').DataTable();
} );
</script>