<?php   

//Simpan dengan nama file koneksidb.php

$server       = "localhost";
$user         = "root";
$password     = "";
$database     = "rfid"; //Nama Database di phpMyAdmin

$koneksi      = mysqli_connect($server, $user, $password, $database);

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query );
    $box = [];
    while( $sql = mysqli_fetch_assoc($result) ){
    $box[] = $sql;
    }
    return $box;
}

function tambahData($post) {
    global $koneksi;
    $id      = $post["id"];
    $nama    = $post["nama"];
    $gender  = $post["gender"];
    $jabatan = $post["jabatan"];

    //insert data ke dalam tb_data
    $sql = "INSERT INTO tb_data(id, nama, gender, jabatan) VALUES('$id', '$nama', '$gender', '$jabatan')";
    mysqli_query($koneksi, $sql);
    return mysqli_affected_rows($koneksi);
  
}


  function ubahData($post) {
     global $koneksi;
     $id      = $post['id'];
     $nama    = $post["nama"];
     $gender  = $post["gender"];
     $jabatan = $post["jabatan"];

    //update data ke tb_data
    $sql = "UPDATE tb_data SET nama = '$nama', gender = '$gender', jabatan = '$jabatan' WHERE id  = '$id'";  
    mysqli_query($koneksi, $sql);
    return mysqli_affected_rows($koneksi);

  }


function hapusData ($id) {
      global $koneksi;
      mysqli_query($koneksi, "DELETE FROM tb_data WHERE id= '$id'");
      return mysqli_affected_rows($koneksi);
 }
  

 ?>