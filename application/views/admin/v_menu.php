 <div class="panel panel-default">
    <div class="panel-body">

<div class="table-responsive">

  <table class="table">
    <tr>
	   <td>No </td>
	   <td>Nama Menu</td>
	
	  
	   <td>Aksi</td>
	  
	</tr>
	
	<?php 
	  if(count($menu)>0):
	    $no=1;
	     foreach($menu as $val):
		 
		   $sql = $this->db->query("select * from hak_akses_admin where id_admin='".$id_admin."' and id_menu='".$val->id."'")->num_rows();
		   
		    if($sql > 0){
				
				$cek = "checked";
			}else{
				$cek = "";
				
			}
		   ?>
		     <tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo strtoupper($val->nama_menu); ?></td>
			   <td><input type="checkbox" <?php echo $cek; ?> class="form-control pilih" id_admin="<?php echo $id_admin; ?>" id_menu="<?php echo $val->id; ?>"></td>
			   
		     </tr>
			 
			
		   <?php 
		 endforeach;
	endif;
	
	
	?>
	
  </table>
  
  </div>
  </div>