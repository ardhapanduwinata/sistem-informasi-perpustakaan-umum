
   
    <main role="main">
<div class="container container-fluid">
<div class="row">
       
        <div class="col-12">
       <h1 class="text-center"><?php echo $records[0]['nama_buku'] ?></h1>
       </div>
       
        <div class="row">
        <div class="col-12">
          <h5 class="text-center"> Pengarang : <?php echo  $records[0]['pengarang']  ?></h5>
          </div>

          <div class="row">
          <div class="col-2"> </div>
          <div class="col-8"> 
             <img src="<?php echo  base_url() ?>assets/path/<?php echo $records[0]['cover_buku']  ?>" alt=" " class="img-fluid" width="">
          </div>
          <div class="col-2"> </div>
           <!-- <div class="col-8">
 -->          <p><center><?php echo $records[0]['sinopsis'] ?></center></p>
        </div>
      
</div>
</div>
</div>
    </main>

