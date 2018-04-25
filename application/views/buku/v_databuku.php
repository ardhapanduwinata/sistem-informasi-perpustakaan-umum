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
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Id Buku</th>
                    <th>Nama Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Nama Penerbit</th>
                    <th>Nama Kategori</th>
                    <th>Lokasi</th>
                    <th>aksi</th>
                </thead>
            <tbody>
                   <tr>
                    <?php
						$no = 1;
						foreach ($data->result() as $row) {
							$nama_penerbit	= $this->m_buku->getBukuById($row->id_penerbit)->row_array();
							$nama_kategori	= $this->m_buku->getBukuById($row->id_kategori)->row_array();
							$lokasi			= $this->m_buku->getBukuById($row->id_kategori)->row_array();
						?>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->id_buku;?></td>
                        <td><?php echo $row->nama_buku;?></td>
                        <td><?php echo $row->pengarang;?></td>
                        <td><?php echo $row->tahun_terbit;?></td>
                        <td><?php echo $nama_penerbit['id_penerbit'];?></td>
                        <td><?php echo $nama_kategori['id_kategori'];?></td>
                        <td><?php echo $lokasi['id_kategori'];?></td>
                        <td>
                            <a class="btn btn-warning" href="<?php echo base_url('index.php/buku/edit/'.$row->id_buku);?>">edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url('index.php/buku/hapus/'.$row->id_buku);?>">delete</a>
                		</td>
                   </tr>
    		</tbody>
    		</table>
        </div>
        <?php }?>
    </div>
</body>             