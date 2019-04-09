<?php
include "koneksi.php";
 $kd_transaksi     = $_GET['kd_transaksi'];
// query SQL untuk insert data
$query="DELETE from transaksi where kd_transaksi='$kd_transaksi'";
mysqli_query($connection, $query);
// mengalihkan ke halaman index.php
if($query){
   echo 'Data berhasil di hapus! ';
   echo '<a href="hapus.transaksi.php">Kembali</a>'; //
  }else{
   echo 'Gagal menghapus data! '; 
   echo '<a href="hapus.transaksi.php">Kembali</a>'; 
  }

?>