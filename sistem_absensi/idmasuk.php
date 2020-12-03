<?php 

require "koneksidb.php";

 $id = query("SELECT * FROM tb_id")[0];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<div class="input-group">
  		 <div class="input-group-prepend">
   		    <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
  	     </div>
  	     <input type="text" class="form-control" name="id" autocomplete="off" value= <?= $id["id"];?>>
	</div><br>

 </body>
 </html>