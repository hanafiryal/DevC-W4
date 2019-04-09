<?php
include 'koneksi.php';
$kd_menu   = $_GET['kd_menu'];
// query SQL untuk insert data
$query="DELETE from menu where kd_menu='$kd_menu'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
if($query){
   echo 'Data mahasiswa berhasil di hapus! ';
   echo '<a href="menu.delete.php">Kembali</a>'; //
  }else{
   echo 'Gagal menghapus data! '; 
   echo '<a href="pembeli.delete.php">Kembali</a>'; 
  }

?>