<?php
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "kopi_kita";

$connection = mysqli_connect($dbhost, $username, $password, $dbname);

if (isset($_POST['btnsubmit'])){
 $tgl_beli   	= $_POST['tgl_beli'];
 $kd_transaksi  = $_POST['kd_transaksi'];
 $id_karyawan   = $_POST['id_karyawan'];
 $kd_pembeli       = $_POST['kd_pembeli'];
 $kd_menu    = $_POST['kd_menu'];
 $nama_menu   = $_POST['nama_menu'];
 $harga   = $_POST['harga'];
 $jumlah_beli = $_POST['jumlah_beli'];
 $total_bayar    = $_POST['total_bayar'];

$sql = "insert into transaksi(tgl_beli,kd_transaksi,id_karyawan,kd_pembeli,kd_menu,nama_menu,harga,jumlah_beli,total_bayar) values('$tgl_beli','$kd_transaksi', '$id_karyawan', '$kd_pembeli','$kd_menu', '$nama_menu', '$harga', '$jumlah_beli', '$total_bayar')";
$result = mysqli_query($connection, $sql);
	if($result){
		echo "Data yang anda masukan berhasil";
		echo '<a href="transaksi.php">Kembali</a>';

	} else {
		echo "Data gagal dimasukan";
		echo '<a href="transaksi.php">Kembali</a>';
	}
}
?>