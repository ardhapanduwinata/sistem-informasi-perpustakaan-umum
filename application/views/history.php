<?php $this->load->view('header.php');?>

<title>One Page Wonder - Start Bootstrap Template</title>


<br>
<div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover example" >
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Nama Buku</th>
                    <th>Cover Buku</th>
                    <th>Status</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
                        $no = 1;
                        foreach ($history as $row) {
                        ?>
                        <td><?php echo $no++; ?></td>
                         <td><?php echo $row->nama_anggota;?></td>
                        <td><?php echo $row->tanggal_peminjaman;?></td>
                        <td><?php echo $row->tanggal_pengembalian;?></td>
                        <td><?php echo $row->nama_buku;?></td>
                        <td><img src="<?php echo base_url().'assets/path/'. $row->cover_buku;?>" width="50px" height="50px"></td>
                        <td><?php echo $row->status;?></td>
                   </tr>
                <?php }?>
            </tbody>
            </table>
        </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_datatables\DataTables\assets_ajax\js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('.example').DataTable();
} );
</script>
