<body><br>
    <div id="page-wrapper">
     <div class="panel-body">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <?php echo form_open_multipart('buku/simpan');?>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Id Buku</label>
                                            <input class="form-control" type="text" name="id_buku" id="id_buku" placeholder="Id Buku" class="span3" required maxlength="13" >
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Buku</label>
                                            <input class="form-control" type="text" name="nama_buku" id="nama_buku" placeholder="Nama Buku" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="span3" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <input class="form-control" type="text" name="tahun_terbit" id="tahun_terbit" placeholder="tahun terbit" class="span3" required>
                                        </div>
                                        <label>Penerbit</label>
                                            <?php $penerbit=$this->db->select('nama_penerbit, id_penerbit')->get('penerbit');?> 
                                            <select class="form-control" name="nama_penerbit" required>
                                                <?php foreach ($penerbit->result() as $key) { ?>
                                                    <option value="<?=$key->id_penerbit?>"><?=$key->nama_penerbit?></option>
                                                    
                                                <?php } ?>
                                            </select>
                                        <label>Nama Kategori</label>
                                            <?php $nama_kategori=$this->db->select('nama_kategori, id_kategori')->get('kategori');?> 
                                            <select class="form-control" name="nama_kategori" required>
                                                <?php foreach ($nama_kategori->result() as $key) { ?>
                                                    <option value="<?=$key->id_kategori?>"><?=$key->nama_kategori?></option>
                                                    
                                                <?php } ?>
                                            </select>
                                        <div>
                                        <label>foto</label>
                                            <input class="form-control" type="file" name="cover_buku" id="cover_buku" class="span3" required>
                                            <br>
                                            <br><button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                            <a href="<?php echo base_url('index.php/buku');?>" class="btn btn-default btn-sm">Kembali</a>
                                            </p>
                                        </div>                  
                                        </form>