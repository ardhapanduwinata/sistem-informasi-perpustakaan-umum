<!DOCTYPE html>
<html lang="en">
<head>

   
    <main role="main" class="container">
<div class="row">
       <h1><center>
        <?php echo $records[0]['nama_buku'] ?> </center></h1>
   <h4 class="text-center"> <center>Pengarang : <?php echo  $records[0]['pengarang']  ?></center></h4>
   <div class="row">
          <div class="col-2"> </div>
          <div class="col-8"> 
    <img src="<?php echo  base_url() ?>assets/path/<?php echo $records[0]['cover_buku']  ?>" alt=" " class="my-5" >
          </div>
          <div class="col-2"> </div>
           <div class="col-8">
          <p><?php echo $records[0]['sinopsis'] ?></p>
        </div>
    </main>


</body>
</html>