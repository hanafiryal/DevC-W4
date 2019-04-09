<?php
include "koneksi.php";
 $kd_menu     = $_POST['kd_menu'];
 $nama_menu   = $_POST['nama_menu'];
 $id_supplier = $_POST['id_supplier'];
 $Harga       = $_POST['Harga'];

 $query = "UPDATE menu SET nama_menu = '$nama_menu', id_supplier = '$id_supplier', Harga = '$Harga' WHERE kd_menu = '$kd_menu'" ;

 $hasil = mysqli_query($connection, $query);

 if ($hasil) {
 	header('location:update.php');

} else {
	echo "Data gagal diupdate";
		echo '<a href="formupdate.menu.php">Kembali</a>';
}
?>
