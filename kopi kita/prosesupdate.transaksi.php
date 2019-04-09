<?php
include "koneksi.php";
 $kd_transaksi     = $_POST['kd_transaksi'];
 $tgl_beli   = $_POST['tgl_beli'];
 $id_karyawan = $_POST['id_karyawan'];
 $kd_pembeli       = $_POST['kd_pembeli'];
 $kd_menu    = $_POST['kd_menu'];
 $nama_menu   = $_POST['nama_menu'];
 $jumlah_beli = $_POST['jumlah_beli'];
 $total_bayar    = $_POST['total_bayar'];


 $query = "UPDATE transaksi SET tgl_beli = '$tgl_beli', id_karyawan = '$id_karyawan', kd_pembeli = '$kd_pembeli', kd_menu = '$kd_menu', nama_menu = '$nama_menu', jumlah_beli = '$jumlah_beli', total_bayar = '$total_bayar' WHERE kd_transaksi = '$kd_transaksi'" ;

 $hasil = mysqli_query($connection, $query);

 if ($hasil) {
 	header('location:update.transaksi.php');

} else {
	echo "Data gagal diupdate";
	echo '<a href="update.transaksi.php">Kembali</a>';
}
?>