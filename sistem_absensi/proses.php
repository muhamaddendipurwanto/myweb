<?php 

//Simpan dengan nama file proses.php
require "koneksidb.php";

	if(isset($_GET["id"])){
	 	  $id       = $_GET["id"];
		  $data     = query("SELECT * FROM tb_data WHERE id = '$id'")[0];

         if($id == $data["id"]){
            $array = ["id" => $id, "nama" => $data["nama"]];
         }
         else{
            $array = ["id" => $id, "status" => "id tidak terdaftar"];
            $sql = "UPDATE tb_id SET id = '$id'";
            $koneksi->query($sql);
         }
		 
             $result = json_encode($array);
             echo $result;

	 }
        
     
       	     

       
 ?>