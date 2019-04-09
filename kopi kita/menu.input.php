<?php
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "kopi_kita";

$connection = mysqli_connect($dbhost, $username, $password, $dbname);

if (isset($_POST['btnsubmit'])){
	$id_supplier = $_POST['id_supplier'];
	$kd_menu = $_POST['kd_menu'];
	$nama_menu = $_POST['nama_menu'];
	$Harga = $_POST['Harga'];

$sql = "insert into menu(id_supplier,kd_menu,nama_menu,Harga) values('$id_supplier', '$kd_menu', '$nama_menu', '$Harga')";
$result = mysqli_query($connection, $sql);
	if($result){
		echo "Data yang anda masukan berhasil";
		header("location:products.php");
	} else {
		echo "Data gagal dimasukan";
		echo '<a href="input.produk.php">Kembali</a>';
	}
}
?>