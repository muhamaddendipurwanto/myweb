<?php

		  require "template.php";
	  
	if(isset($_POST["simpan"]) ) {
	   if( ubahData($_POST) > 0 ) {
		echo "
			 <script>
				  Swal.fire({ 
                  title: 'SELAMAT',
                  text: 'Perubahan data telah disimpan',
                  icon: 'success', buttons: [false, 'OK'], 
                  }).then(function() { 
                  window.location.href='index.php'; 
                  }); 
			 </script>
		";
	   }
	   else {
	    echo "
         <script> 
         Swal.fire({ 
            title: 'OOPS', 
            text: 'Data gagal disimpan', 
            icon: 'warning', 
            dangerMode: true, 
            buttons: [false, 'OK'], 
            }).then(function() { 
                window.location.href='index.php'; 
            }); 
         </script>
        ";
	   }
	 }


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>

    <?php 
        if(isset($_GET["id"])){
          $id    = $_GET["id"];
          $data  = query("SELECT * FROM tb_data WHERE id = '$id'")[0];
     ?>
			
    <div class="card mt-4" style="width: 25rem;">
      <div class="card-body">
        <h5 class="card-title">UBAH DATA MEMBER</h5>
          <form action="ubah.php" method="post">
                    <div class="form-group">
                      <input type="text" name="id"  class="form-control" value="<?=$data["id"];?>" hidden ><br>
                      <input type="text" name="nama"  class="form-control" placeholder="Nama" autocomplete="off" value="<?=$data["nama"];?>" ><br>
                     <?php if($data["gender"] == "L") {
                            echo '
                                  <div class ="row px-5">
                                     <div class ="col">
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gender" value="L" checked="checked">
                                          <label class="form-check-label">Laki laki</label>
                                      </div>
                                    </div>
                                    <div class ="col">
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gender" value="P">
                                          <label class="form-check-label">Perempuan</label>
                                      </div>
                                     </div>
                                    </div><br>
                                ';}

                          else if($data["gender"] == "P") {
                            echo '
                                  <div class ="row px-5">
                                    <div class="col">
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gender" value="L">
                                          <label class="form-check-label">Laki laki</label>
                                      </div>
                                     </div>
                                     <div class="col">
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio" name="gender" value="P" checked="checked">
                                          <label class="form-check-label">Perempuan</label>
                                      </div>
                                     </div>
                                  </div><br>
                                ';}
                        ?>
                      <input type="text" name="jabatan"  class="form-control" placeholder="Jabatan" autocomplete="off" value="<?=$data["jabatan"];?>" ><br>

                         <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                         <a href="index.php" name="batal" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</a> 
                    </div>
                  </form>
      </div>
    </div>
  <?php   } ?>

 </center>
    
   

</body>
</html>


